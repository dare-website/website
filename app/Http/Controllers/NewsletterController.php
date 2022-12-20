<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\Produto;
use App\Models\TipoProduto;


class NewsletterController extends Controller
{
    public function newsletter(Request $request){
        $data = $request->input();
        try{
            $news = new Newsletter;
            $news->email = $data['email'];
            $news->save();

            return redirect('/')->with('success',"Newsletter enviado!");
        }

        catch(Exception $e){
            return redirect('/')->with('failed',"Registo Falhado :(");
        }
    }
    public function produto($id)
    {
        
        if ($id==1) {
            $tipoproduto = TipoProduto::find($id);
            $produtosR= Produto::whereNot('id_tipo',$id)->inRandomOrder()->limit(3)->get();
            $produto0 = Produto::where('alcool',0)->get();
            $produto1 = Produto::where('alcool',1)->get();
            return view('produtoesfe', ['produto0' => $produto0,'produto1' => $produto1, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR]);
        }
        if ($id==2) {
            $produtosR= Produto::whereNot('id_tipo',$id)->inRandomOrder()->limit(3)->get();
            $tipoproduto = TipoProduto::find($id);
            $produto = Produto::where('id_tipo',$id)->get();
            return view('produtololli', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR]);
        }
        $id_tipo= Produto::where('id',$id)->first()->id_tipo;
        if ($id_tipo==3) {
            $tipoproduto = Produto::where('id',$id)->first();
            $produto = Produto::where('id_tipo',$id)->get();
            return view('produtocana', ['produto' => $produto, 'tipoproduto'=>$tipoproduto]);
        }
        if ($id==4) {
            $tipoproduto = TipoProduto::find($id);
            $produto = Produto::where('id_tipo',$id)->get();
            return view('produtosemi', ['produto' => $produto, 'tipoproduto'=>$tipoproduto]);
        }
        
    }

}