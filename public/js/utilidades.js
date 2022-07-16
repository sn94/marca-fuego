

function show_loaded_image(ev, domTarget, options = undefined) {
    let entrada = ev.srcElement;

    let reader = new FileReader();
    reader.onload = function (e) {

        //es imagen?
        if (!/image/.test(entrada.files[0].type)) { // You can get the mime type) {
            alert("Debe seleccionar una imagen!")
            entrada.value = null
            return;
        }


        var filePreview = document.createElement('img');
        filePreview.className = "img-fluid";
        filePreview.src = e.target.result;
        if (options && "width" in options)
            filePreview.style.width = options ? options.width : "auto";
        if (options && "height" in options)
            filePreview.style.height = options ? options.height : "300px";


        let domTarget_ = document.querySelector(domTarget)
        domTarget_.innerHTML = "";
        domTarget_.appendChild(filePreview);
    };
    reader.readAsDataURL(entrada.files[0]);
}


/*

From a input type file 
*/
function cargarVideo(ev) {

    $(".containerVideo").append(
        `
   <div id='spinner' style='position: absolute;z-index: 1;left:50%;top:50%; transform: scale(2);' >
   <div class="spinner-border text-primary" role="status" >
  <span class="sr-only">Loading...</span>
</div>
   </div>
`
    )


    let fileInput = ev.srcElement
    let tipoVideo = fileInput.files[0].type

    let reader = new FileReader();
    reader.onload = function (e) {


        let resultado = e.target.result;


        let videoTag = document.querySelector(".containerVideo video")
        videoTag.type = tipoVideo
        videoTag.src = resultado;
        $(".containerVideo #spinner").remove('')
        //document.querySelector(".containerVideo").appendChild(videoTag);

    };

    reader.readAsDataURL(fileInput.files[0]);
    //   document.getElementById("contenidoVideo");

}




async function fetchVideo(e) {

    e.preventDefault();
    $(".cursoIntro").append(
        `
        <div id='spinner'    style='transform: scale(3);position: absolute; '>
<div class="spinner-border" role="status"   >
<span class="sr-only">Loading...</span>
</div> </div>
        `
    )

    let url = e.currentTarget.href;
    let req = await fetch(url);
    let blobb = await req.blob();

    let objectURL = URL.createObjectURL(blobb);


    ///convertir a b64
    let reader = new FileReader()
    reader.onload = function (e) {
        $("#spinner").remove()
        document.querySelector(".cursoIntro video").type = blobb.type
        document.querySelector(".cursoIntro video ").src = e.target.result
        document.querySelector(".cursoIntro video").play()
        //appendChild(videoTag);
    }

    reader.readAsDataURL(blobb)


}



window.streamingVideo = false;
async function streamVideo(e) {

    if (window.streamingVideo) return;

    window.streamingVideo = true;
    e.preventDefault()

    let urlVideo = e.currentTarget.href;
    var respVideo = await fetch(urlVideo)
    var reader = respVideo.body.getReader() //  ReadableStream instance
    var videonuevo = document.querySelector(".cursoIntro video") //crear objeto video

    var mime = respVideo.headers.get('content-type') //tipo mime
    var vsize = respVideo.headers.get('content-length') //size

    var csize = 0; //contador
    var uints = [] //cada stream recibido sera un Uint8Array

    videonuevo.pause()

    //crear info porcentaje 
    $(videonuevo.parentNode).append(`
<div class="progress progress-sm mr-2" style='position: absolute;display:flex;align-items: center; z-index: 1; top: 50%; left: 50%; transform: translate(-50%); width: 200px; height: 50px;'>
<label class="percentage" style='position: absolute; text-align: center;padding: 25px; top:0; left: 0; font-size: 20px; width: 100%;height: 50px;'>0%</label>
<div class="progress-bar bg-info" role="progressbar" style="max-width: 130px; width: 0%; height: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
     `)




    while (true) { // Leer mientras no se completen los streams
        const { value, done } = await reader.read();
        uints.push(value) //guardar uint8array

        if (done) break; //lectura completa, salir del bucle
        console.log('Received', value);
        csize += value.length; //  sumar los bytes que van llegando
        let porcentaje = Math.round((csize * 100) / vsize);

        $(".progress-bar").css('width', porcentaje + "%")
        $(".progress .percentage").text(porcentaje + "%")
    }

    $(".progress").remove()

    console.log('Response fully received');
    var blobe = new Blob(uints); //arreglo de uint8arrays  -> blob
    var lector = new FileReader() //lector de blob
    lector.onload = function (e) {
        let resultado = e.target.result;
        videonuevo.type = mime
        videonuevo.src = resultado;
        videonuevo.play()
    };

    lector.readAsDataURL(blobe) //leer blob como un data uri

    window.streamingVideo = false;

}