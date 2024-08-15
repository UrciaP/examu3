<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail\MensajeRecibido;

use Illuminate\Support\facades\Mail; 
class ContactoController extends Controller
{
    public function store(){
        $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
        ],[
            'nombre.required' => 'El campo nombre es obligatorio.',
            'email.required' => 'El campo email debe ser un email válido.',
            'asunto.required' => 'El campo asunto debe tener al menos :min caracteres.',
            'mensaje.required' => 'El campo mensaje debe tener al menos :min caracteres.',
        ]);
        Mail::to('t512701420@unitru.edu.pe')->queue(new MensajeRecibido($mensaje));
        // return new MensajeRecibido($mensaje);
        // return 'Datos validados';
        return back()->with('estado', 'Gracias por ponerte en contacto con nosotros');
    }
}
