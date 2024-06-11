<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\Produto;
use App\Models\ProdutoEn;
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
    
    public function produto($id){
        if(strcmp(session()->get('applocale'),"en")==0){
            $id_tipo= ProdutoEn::where('id',$id)->first()->id_tipo;
            $img_produto = Imagem::where('id_tipo',$id)->get();
            if ($id_tipo==5) {
                $tipoproduto = TipoProduto::find($id_tipo);

                $produtosR= ProdutoEn::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $produto0 = ProdutoEn::where('alcool',0)->get();
                $produto1 = ProdutoEn::where('alcool',1)->get();
                $produtoS = ProdutoEn::where('id',$id)->first();
                return view('produtoesfe', ['produto0' => $produto0,'produto1' => $produto1, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR, 'produtoS'=>$produtoS, 'img_produto'=>$img_produto]);
            }
            if ($id_tipo==6) {
                $produtoS = ProdutoEn::where('id',$id)->first();
                $produtosR= ProdutoEn::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto =  TipoProduto::where('id',$id_tipo)->first();
                $produto = ProdutoEn::where('id_tipo',$id_tipo)->get();
                return view('produtololli', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR, 'produtoS'=>$produtoS,'img_produto'=>$img_produto]);
            }
        
            if ($id_tipo==7) {
                $produtosR= ProdutoEn::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = ProdutoEn::where('id',$id)->first();
                $produto = ProdutoEn::where('id_tipo',$id_tipo)->get();
                $produtoS = ProdutoEn::where('id',$id)->first();

                return view('produtocana', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'produtoS'=>$produtoS,'img_produto'=>$img_produto]);
            }
            if ($id_tipo==8) {
                $produtosR= ProdutoEn::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = ProdutoEn::where('id',$id)->first();
                $produto = ProdutoEn::where('id_tipo',$id_tipo)->get();
                return
                 view('produtosemi', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
            }if ($id_tipo==14) {
                $produtosR= ProdutoEn::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = ProdutoEn::where('id',$id)->first();
                $produto = ProdutoEn::where('id_tipo',$id_tipo)->get();
                return view('produtovina', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
            }
            if ($id_tipo==15) {
                $produtosR= ProdutoEn::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = ProdutoEn::where('id',$id)->first();
                $produto = ProdutoEn::where('id_tipo',$id_tipo)->get();
                return view('produtoalhosn', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
            }
            if ($id_tipo==16) {
                $produtosR= ProdutoEn::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = ProdutoEn::where('id',$id)->first();
                $produto = ProdutoEn::where('id_tipo',$id_tipo)->get();
                return view('produtoperola', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
            }if ($id_tipo==17) {
                $tipoproduto = TipoProduto::find($id_tipo);

                $produtosR= ProdutoEn::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $produto0 = ProdutoEn::where('demi_glace',0)->get();
                $produto1 = ProdutoEn::where('demi_glace',1)->get();
                $produtoS = ProdutoEn::where('id',$id)->first();
                return view('produtovegan', ['produto0' => $produto0,'produto1' => $produto1, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR, 'produtoS'=>$produtoS, 'img_produto'=>$img_produto]);
            }if ($id_tipo==18) {
                $produtosR= ProdutoEn::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = ProdutoEn::where('id',$id)->first();
                $produto = ProdutoEn::where('id_tipo',$id_tipo)->get();
                return view('produtotrufa', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
            } 
            
            
        }else{
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
            if ($id_tipo==9) {
                $produtosR= Produto::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = Produto::where('id',$id)->first();
                $produto = Produto::where('id_tipo',$id_tipo)->get();
                return view('produtovina', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
            }
            if ($id_tipo==10) {
                $produtosR= Produto::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = Produto::where('id',$id)->first();
                $produto = Produto::where('id_tipo',$id_tipo)->get();
                return view('produtoalhosn', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
            }
            if ($id_tipo==11) {
                $produtosR= Produto::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = Produto::where('id',$id)->first();
                $produto = Produto::where('id_tipo',$id_tipo)->get();
                return view('produtoperola', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
            }
            if ($id_tipo==12) {
                $tipoproduto = TipoProduto::find($id_tipo);
                $produtosR= Produto::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $produto0 = Produto::where('demi_glace',0)->get();
                $produto1 = Produto::where('demi_glace',1)->get();
                $produtoS = Produto::where('id',$id)->first();
                return view('produtovegan', ['produto0' => $produto0,'produto1' => $produto1, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR, 'produtoS'=>$produtoS, 'img_produto'=>$img_produto]);
            }
            if ($id_tipo==13) {
                $produtosR= Produto::whereNot('id_tipo',$id_tipo)->inRandomOrder()->limit(3)->get();
                $tipoproduto = Produto::where('id',$id)->first();
                $produto = Produto::where('id_tipo',$id_tipo)->get();
                return view('produtotrufa', ['produto' => $produto, 'tipoproduto'=>$tipoproduto,'produtosR'=>$produtosR,'img_produto'=>$img_produto]);
            } 
        }
    }
}