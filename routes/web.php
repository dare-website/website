<?php

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
use App\Models\Produto;

Route::get('/', function () {
    return view('home_page');
});

Route::get('/produtos', function () {
    $produto_esferificacao= Produto::where('id_tipo',1)->get();
    return view('produtos')->with(['esferificacoes'=> $produto_esferificacao]);
});
Route::get('/produto', function () {
    
    return view('produto');
});
Route::get('/contactos', function () {
    return view('contactos');
});

/*Route::post('/news', [App\Http\Controllers\NewsletterController::class, 'newsletter'])->name('newsletter');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});*/

