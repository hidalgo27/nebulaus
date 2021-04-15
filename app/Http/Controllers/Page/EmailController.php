<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function contacto(Request $request){
        $subject = "Asunto del correo";
        $for = "tania.vanessa609@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
        $msj->;from("tucorreo@gmail.com","NombreQueApareceráComoEmisor");
        $msj->subject($subject);
        $msj->to($for);
        });
        return redirect()->back();
    }
    public function mensaje(Request $request ){
        $subject ="ASUNTO";
        $for="tania.vanessa609@gmail.com";
        /*Mail::send('email'.$request*/
    }
}
