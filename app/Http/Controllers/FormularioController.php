<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormularioController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $mensaje_enviado = true;
        $correo = new ContactoMailable($request->all());
        Mail::to('paulot73@hotmail.com')->send($correo);
        return view('contacto', compact('mensaje_enviado'));
    }
}
