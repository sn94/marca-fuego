<style>
    /* 16 segundos */

    @keyframes  bannerBg1 {

        0%,
        25% {
            opacity: 1;

        }


        26%,
        51%,
        52%,
        77%,
        78%,
        100% {
            opacity: 0;

        }


    }

    @keyframes  bannerBg2 {

        0%,
        25% {
            opacity: 0;
        }

        26%,
        51% {
            opacity: 1;
        }

        52%,
        77% {
            opacity: 0;
        }

        78%,
        100% {
            opacity: 0;
        }

    }

    
    @keyframes  bannerBg3 {

        0%,
        25% {
            opacity: 0;
        }

        26%,
        51% {
            opacity: 0;
        }

        52%,
        77% {
            opacity: 1;
        }

        78%,
        100% {
            opacity: 0;
        }


    }

    @keyframes  bannerBg4 {

        0%,
        25% {
            opacity: 0;
        }

        26%,
        51% {
            opacity: 0;
        }

        52%,
        77% {
            opacity: 0;
        }

        78%,
        100% {
            opacity: 1;
        }
}


    .banner_main {

        position: relative;
        overflow: hidden;
        min-height: 100vh;

        display: flex;
        justify-content: center;
        align-content: center;
        align-items: center;
        margin-bottom: 50px !important;

    }

    #banner_bg1 {
        position: absolute;
        opacity: 0;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh !important;
        object-fit: cover;

        animation: bannerBg1 20s ease 0s infinite;
    }

    #banner_bg2 {
        position: absolute;
        opacity: 0;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh !important;
        object-fit: cover;
        animation: bannerBg2 20s ease 0s infinite;
    }

    #banner_bg3 {
        position: absolute;
        opacity: 0;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh !important;
        object-fit: cover;
        animation: bannerBg3 20s ease 0s infinite;
    }

    #banner_bg4 {
        position: absolute;
        opacity: 0;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh !important;
        object-fit: cover;
        animation: bannerBg4 20s ease 0s infinite;
    }

    #bannerTranslucid {
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: transparent;
        display: flex;
        justify-content: center;
    }

    #bannerText {
        position: absolute;
        width: 60%;
 
        top: 200px;
    }

    #bannerText h1 {

        font-size: 10vw !important;
        color: white !important;
        font-weight: bold;
        text-shadow: 1px 1px 10px black;
    }

    #bannerParagraph {
        font-size: max(2vw, 1em);
        line-height: 5vh;
        color: white;
        text-shadow: 1px 1px 5px black, 0 0 10px gray;
    }
</style>



<section class="banner_main">
    <img id="banner_bg1" src="<?= asset('image/slide/wallpaperbetter.jpg') ?>" alt="">
    <img id="banner_bg2" src="<?= asset('image/slide/wallpaperbetter(1).jpg') ?>" alt="">
    <img id="banner_bg3" src="<?= asset('image/slide/wallpaperbetter(2).jpg') ?>" alt="">
    <img id="banner_bg4" src="<?= asset('image/slide/wallpaperbetter(3).jpg') ?>" alt="">
    <div id="bannerTranslucid">

        <div id="bannerText">

            <h1>Bienvenidos</h1>

            <p id="bannerParagraph">Desde el 2014, nuestro talentoso equipo, trabaja arduamente para ofrecer los mejores servicios a

                nuestros clientes. Personalizamos nuestras ofertas basadas en las necesidades especificas de cada

                uno.</p>

            <!-- <a href="#">Discover</a>-->

        </div>

    </div>

</section><?php /**PATH C:\xampp\htdocs\marca-fuego\resources\views/client/layouts/banner.blade.php ENDPATH**/ ?>