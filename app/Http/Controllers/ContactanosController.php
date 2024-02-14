<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactoRequest;
use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(ContactoRequest $request){

        Mail::to('vegafernando881@gmail.com')
            ->send(new ContactoMailable($request->all()));      

        return redirect()->route('contactanos.index')
            ->with('info', 'Mensaje Enviado');
    }
}
