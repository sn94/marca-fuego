<?php

use App\Actions\NotifyNewContact;
use App\Actions\NotifyNewSubscriptor as ActionsNotifyNewSubscriptor;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\LotsController;
use App\Http\Controllers\SubscriptorsController;
use App\Http\Controllers\VideoUploadController;
use App\Mail\NotifyNewSubscriptor;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Lote;
use App\Models\Subscriptor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ ContactsController::class, 'create_public'] )->name('hello');



Route::get('/formulario-contacto-reg', [ ContactsController::class, 'showFormDeRegistrado'])->name('client.form_contact_registrado');
Route::get('/formulario-contacto-noreg', [ ContactsController::class, 'showFormDeNoRegistrado'])->name('client.form_contact_noregistrado');


##guest control init
Route::middleware('registered_guest')->group(function(){



  Route::get('/home', function () {
    $categories =  Category::get();
    return view('client.index', compact('categories'));
  })->name('home');
  
  Route::get('/categorias', function () {
    $categories = Category::get();
    return view('client.pages.categories', compact('categories'));
  })->name('client.categorias');
  
  
  Route::get('/categorias/{category}', function (Category $category) {
    $lotes =Lote::where('category_id', $category->id)->get() ;
   
   
    /*->filter(
      function ($lot) {
        return $lot->video_url || $lot->front_photo_url;
      }
    );*/
    return view('client.lots_by_category', compact('lotes', 'category'));
  });
  
  Route::get('/nosotros', function (Category $category) {
  
    return view('client.pages.nosotros');
  })->name('client.us');
  
  Route::get('/novedades', function (Category $category) {
  
    return view('client.pages.novedades');
  })->name('client.news');
  
});



##  control guest registrado



Route::prefix('contactanos')->group(function () {

  // Route::get('/', [ ContactsController::class, 'create'])->name('client.contact_us');
  Route::get('/',  [ContactsController::class, 'create_public']);
  Route::post('/',  [ContactsController::class, 'register'])->name('client.contact_us');
});

Route::post('/subscription',  [SubscriptorsController::class, 'subscribe'])->name('client.subscription');



Route::get('/test', function () {
 return redirect()->route('home')->with('success_toast',  "Bienvenida Sonia Toledo");
 
// dd(         new NotifyNewContact( Contact::first() ) );
});




Route::prefix('perfil')->middleware(['auth'])->group(function () {

  Route::get('/', function () {
    return view('admin.users.profile');
  })->name('perfil');

  Route::post('/', function (Request $request) {

    $request->validate([
      'email' => 'required|email',
      'name' => 'required|max:255',
      'password' => 'required_with:change_password|confirmed'
    ]);

    $user = request()->user();

    $data =   ['email' =>  $request->email, 'name' =>  $request->name];
    if ($request->has('change_password')) {
      $data['[password'] =  Hash::make($request->password);
    }
    $user->fill($data);
    $user->save();
    return redirect()->route('perfil')->with('success', 'PERFIL ACTUALIZADO');
  });
});

Route::prefix('admin')->middleware(['auth'])->group(function () {

  Route::get('/dashboard', function () {

    $lots = Lote::count();
    $categories = Category::count();
    return view('admin.welcome', compact('lots', 'categories'));
  })->name('dashboard');



  Route::prefix('/contactos')->group(function () {


    Route::get("/",  [ContactsController::class, 'index'])->name('contactos');
    Route::get("/crear",  [ContactsController::class, 'create']);
    Route::post("/",  [ContactsController::class, 'store']);

    Route::get("/leer/{contact}",  [ContactsController::class, 'show']);
  });

  Route::prefix('/suscriptos')->group(function () {


    Route::get("/",  [SubscriptorsController::class, 'index'])->name('subscriptors');
  });


  Route::prefix('/categorias')->group(function () {


    Route::get('/',  [CategoriasController::class, 'index'])->name('categorias');
    Route::get('/crear',  [CategoriasController::class, 'create']);
    Route::post('/',  [CategoriasController::class, 'store']);
    Route::get('/editar/{category}',  [CategoriasController::class, 'edit']);
    Route::put('/{category}',  [CategoriasController::class, 'update']);

    Route::get('/borrar/{category}',  [CategoriasController::class, 'delete']);
    Route::delete('/{category}',  [CategoriasController::class, 'destroy']);
  });


  Route::prefix('/lotes')->group(function () {


    Route::get('/',  [LotsController::class, 'index'])->name('lotes');
    Route::get('/crear',  [LotsController::class, 'create']);
    //  Route::post('/{lot}',  [LotsController::class, 'update']);

    Route::get('/editar/{lot}',  [LotsController::class, 'edit']);
    Route::put('/{lot}',  [LotsController::class, 'update']);

    Route::get('/borrar/{lot}',  [LotsController::class, 'delete']);
    Route::delete('/{lot}',  [LotsController::class, 'destroy']);
  });


  Route::prefix('/videos')->group(function () {


    Route::get('/',  [LotsController::class, 'index'])->name('videos');
    Route::get('/crear',  [VideoUploadController::class, 'create']);
    Route::post('/{lot}',  [VideoUploadController::class, 'upload']);
    Route::get('/editar/{lot}',  [LotsController::class, 'edit']);
    Route::put('/{lot}',  [LotsController::class, 'update']);

    Route::get('/borrar/{lot}',  [LotsController::class, 'delete']);
    Route::delete('/{lot}',  [LotsController::class, 'destroy']);
  });
});






require __DIR__ . '/auth.php';
