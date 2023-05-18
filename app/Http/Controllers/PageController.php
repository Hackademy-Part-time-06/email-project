<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function form(){
        return view('form');
    }


       public function product(){
        
        $prodotti=Http::get('https://fakestoreapi.com/products')->json();
        @dd($prodotti);
        return view('product',['prodotti'=>$prodotti]);
    }

public function send(Request $request){

$request->validate([
"email"=>"required|email",
"password"=>"required|string",
"message"=>"required|max:10",
]);


$data=[
"email"=>$request->input('email'),
"password"=>$request->password,
"message"=>$request->name,
];
Mail::to($request->input('email'))->send(new InfoMail($data));
 
        return redirect('/orders');
}
}
