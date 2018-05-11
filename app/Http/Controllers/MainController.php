<?php

namespace App\Http\Controllers;

use App\Mail\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{

    public function sendMail(){

        $info = request()->all();

        Mail::to('contacto@sagaz.com.ar', 'Nuevo Contacto')->send(new Contacto($info));

        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

}
