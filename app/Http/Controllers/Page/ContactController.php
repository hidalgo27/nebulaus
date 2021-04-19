<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //show the formulary
    public function index(){
        return view('layouts.contactoform');
    }

    //get the form and send the email
    public function send(Request $request){
        Mail::to("151834@unsaac.edu.pe")->send(
            new SendContactForm(
                $request->input("nombre"),
                $request->input("email"),
                $request->input("whatsaap"),
                $request->input("mensaje")
            )
        );
    }
}
