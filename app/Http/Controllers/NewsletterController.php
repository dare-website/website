<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;


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
}
