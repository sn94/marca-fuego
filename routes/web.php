<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\LotsController;
use App\Http\Controllers\SubscriptorsController;
use App\Http\Controllers\VideoUploadController;
use App\Mail\NotifyNewSubscriptor;
use App\Models\Category;
use App\Models\Lote;
use App\Models\Subscriptor;
use App\Models\User;
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

Route::get('/', function () {
  $categories =  Category::get();
  return view('client.index', compact('categories'));
})->name('home');

Route::get('/categorias', function () {
  $categories = Category::get();
  return view('client.pages.categories', compact('categories'));
})->name('client.categorias');


Route::get('/categorias/{category}', function (Category $category) {
  $lotes = $category->lots;
  return view('client.lots_by_category', compact('lotes', 'category'));
});

Route::get('/nosotros', function (Category $category) {

  return view('client.pages.nosotros');
})->name('client.us');

Route::prefix('contactanos')->group(function () {

  // Route::get('/', [ ContactsController::class, 'create'])->name('client.contact_us');

  Route::post('/',  [ContactsController::class, 'register'])->name('client.contact_us');
});

Route::post('/subscription',  [SubscriptorsController::class, 'subscribe'])->name('client.subscription');


Route::get('/test', function () {


  Mail::to('stoledo@upload.com.py')
    ->send(new NotifyNewSubscriptor(Subscriptor::first()));
});





Route::prefix('admin')->middleware(['auth'])->group(function () {

  Route::get('/dashboard', function () {
    return view('admin.welcome');
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
