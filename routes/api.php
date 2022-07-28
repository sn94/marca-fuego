<?php

use App\Models\Lote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('videos/{lot}', function( Lote $lot){

    if(  $lot->video_url)
    return [ [   'name'=> $lot->video, 'id'=>$lot->id, 'video_url' => $lot->video_url , 'thumbnail' => asset('image/video_icon.png') ]];
    else return [];
});
