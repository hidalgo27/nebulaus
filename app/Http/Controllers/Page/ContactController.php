<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMaillable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //show the formulary
    public function index(){
        return view('layouts.contactForm');
    }

    //get the form and send the email
    public function store(){
        $correo=new ContactMaillable;
        Mail::to("davidpaulpg159@gmail.com")->send($correo);
        return "mensaje enviado";
    }
}
