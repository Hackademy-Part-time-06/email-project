<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[PageController::class, 'homepage'])->name('homepage');
Route::get('/form',[PageController::class, 'form'])->name('form');
//Route::get('/product/{ref}',[PageController::class, 'product'])->name('product');
Route::post('/send',[PageController::class, 'send'])->name('send');
//Route::get('/product/{ref}',[PageController::class, 'product'])->name('product');
/*
Route::get('/test', function () {
    $response= Http::get('https://fakestoreapi.com/products')->json();
    return $response;
  });  //voglio elemento 5 del file json
*/
