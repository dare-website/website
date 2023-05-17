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
use App\Models\ProdutoEn;

Route::get('/', function () {
    return view('home_page');
});

Route::get('/produtos', function () {
        if(strcmp(session()->get('applocale'),"en")==0){
            $produto_esferificacao= ProdutoEn::where('id_tipo',5)->get();
            $produto_lollipolis= ProdutoEn::where('id_tipo',6)->get();
            $produto_canapes= ProdutoEn::where('id_tipo',7)->get();
            $produto_semi= ProdutoEn::where('id_tipo',8)->get();

            $produto_vini= ProdutoEn::where('id_tipo',14)->get();
            $produto_alhon= ProdutoEn::where('id_tipo',15)->get();
            $produto_perola= ProdutoEn::where('id_tipo',16)->get();
            $produto_vegan= ProdutoEn::where('id_tipo',17)->get();
            $produto_trufa= ProdutoEn::where('id_tipo',18)->get();
            return view('produtos')->with(['esferificacoes'=> $produto_esferificacao, 'lollipolis'=> $produto_lollipolis, 'canapes'=>$produto_canapes, 'semi'=>$produto_semi, 'vini'=>$produto_vini, 'alhon'=>$produto_alhon, 'perola'=>$produto_perola, 'vegan'=>$produto_vegan,'trufa'=>$produto_trufa]);
      
        }else{
            $produto_esferificacao= Produto::where('id_tipo',1)->get();
            $produto_lollipolis= Produto::where('id_tipo',2)->get();
            $produto_canapes= Produto::where('id_tipo',3)->get();
            $produto_semi= Produto::where('id_tipo',4)->get();

            $produto_vini= Produto::where('id_tipo',9)->get();
            $produto_alhon= Produto::where('id_tipo',10)->get();
            $produto_perola= Produto::where('id_tipo',11)->get();
            $produto_vegan= Produto::where('id_tipo',12)->get();
            $produto_trufa= Produto::where('id_tipo',13)->get();
            return view('produtos')->with(['esferificacoes'=> $produto_esferificacao, 'lollipolis'=> $produto_lollipolis, 'canapes'=>$produto_canapes, 'semi'=>$produto_semi,'vini'=>$produto_vini, 'alhon'=>$produto_alhon, 'perola'=>$produto_perola, 'vegan'=>$produto_vegan,'trufa'=>$produto_trufa]);
        }
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
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::post('/news', [App\Http\Controllers\NewsletterController::class, 'newsletter'])->name('newsletter');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});