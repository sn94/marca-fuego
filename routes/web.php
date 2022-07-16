<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LotsController;
use App\Http\Controllers\VideoUploadController;
use App\Models\Category;
use App\Models\Lote;
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

Route::get('/categorias', function ( ) {
  $categories = Category::get();
  return view('client.pages.categories', compact(  'categories'));
})->name('client.categorias');


Route::get('/categorias/{category}', function ( Category $category) {
  $lotes = $category->lots; 
  return view('client.lots_by_category', compact('lotes', 'category'));
});

Route::get('/nosotros', function ( Category $category) {
 
  return view('client.pages.nosotros');
})->name('client.us');

Route::get('/contactanos', function ( Category $category) {
 
  return view('client.pages.contacto');
})->name('client.contact_us');




Route::get('/test', function () {
  return Lote::find(1);
});

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', function () {
        return view('admin.welcome');
    })->middleware(['auth'])->name('dashboard');

    
    Route::prefix('/categorias')->group( function () {
  

        Route::get('/',  [CategoriasController::class, 'index'])->name('categorias');
        Route::get('/crear',  [CategoriasController::class, 'create']);
        Route::get('/editar/{category}',  [CategoriasController::class, 'edit']);
        Route::put('/{category}',  [CategoriasController::class, 'update']);
     
        Route::get('/borrar/{category}',  [CategoriasController::class, 'delete']);
        Route::delete('/{category}',  [CategoriasController::class, 'destroy']);
         
     });
     
     
     Route::prefix('/lotes')->group( function () {
       
     
         Route::get('/',  [LotsController::class, 'index'])->name('lotes');
         Route::get('/crear',  [LotsController::class, 'create']);
       //  Route::post('/{lot}',  [LotsController::class, 'update']);

         Route::get('/editar/{lot}',  [LotsController::class, 'edit']);
         Route::put('/{lot}',  [LotsController::class, 'update']);
      
         Route::get('/borrar/{lot}',  [LotsController::class, 'delete']);
         Route::delete('/{lot}',  [ LotsController::class, 'destroy']);
          
      });


      Route::prefix('/videos')->group( function () {
       
     
        Route::get('/',  [LotsController::class, 'index'])->name('videos');
        Route::get('/crear',  [ VideoUploadController::class, 'create']);
        Route::post('/{lot}',  [VideoUploadController::class, 'upload']);
        Route::get('/editar/{lot}',  [LotsController::class, 'edit']);
        Route::put('/{lot}',  [LotsController::class, 'update']);
     
        Route::get('/borrar/{lot}',  [LotsController::class, 'delete']);
        Route::delete('/{lot}',  [ LotsController::class, 'destroy']);
         
     });
      
});






require __DIR__.'/auth.php';
