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
    $produto_lollipolis= Produto::where('id_tipo',2)->get();
    $produto_canapes= Produto::where('id_tipo',3)->get();
    $produto_semi= Produto::where('id_tipo',4)->get();
    return view('produtos')->with(['esferificacoes'=> $produto_esferificacao, 'lollipolis'=> $produto_lollipolis, 'canapes'=>$produto_canapes, 'semi'=>$produto_semi]);
});
Route::get('/produto', function () {
    
    return view('produtosemi');
});
Route::get('/produto', function () {   
    return view('produtoesfe');
});
Route::get('/politica-privacidade', function () {   
    return view('politica');
});
Route::get('/produto', function () {
    
    return view('produtololli');
});
Route::get('/produto', function () {
    
    return view('produtocana');
});
Route::get('/produto/{id}', [App\Http\Controllers\NewsletterController::class, 'produto'])->name('produto');

Route::post('/news', [App\Http\Controllers\NewsletterController::class, 'newsletter'])->name('newsletter');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

