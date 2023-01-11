<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\Produto;
use App\Models\TipoProduto;
use App\Models\Imagem;

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
        $id_tipo= Produto::where('id',$id)->first()->id_tipo;
        $img_produto = Imagem::where('id_tipo',$id)->get();
        if ($id_tipo==1) {
            $tipoproduto = TipoProduto::find($id_tipo);
            $produtosR= Produto::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
            $produto0 = Produto::where('alcool',0)->get();
            $produto1 = Produto::where('alcool',1)->get();
            $produtoS = Produto::where('id',$id)->first();
            return view('produtoesfe', ['produto0' => $produto0,'produto1' => $produto1, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR, 'produtoS'=>$produtoS, 'img_produto'=>$img_produto]);
        }
        if ($id_tipo==2) {
            $produtoS = Produto::where('id',$id)->first();
            $produtosR= Produto::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
            $tipoproduto =  TipoProduto::where('id',$id_tipo)->first();
            $produto = Produto::where('id_tipo',$id_tipo)->get();
            return view('produtololli', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR, 'produtoS'=>$produtoS,'img_produto'=>$img_produto]);
        }
       
        if ($id_tipo==3) {
            $produtosR= Produto::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
            $tipoproduto = Produto::where('id',$id)->first();
            $produto = Produto::where('id_tipo',$id_tipo)->get();
            return view('produtocana', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
        }
        if ($id_tipo==4) {
            $produtosR= Produto::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
            $tipoproduto = Produto::where('id',$id)->first();
            $produto = Produto::where('id_tipo',$id_tipo)->get();
            return view('produtosemi', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
        }
        
    }

}