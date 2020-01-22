<?php

namespace App\Http\Controllers;

use App\Mail\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{

    public function sendMail(){

        $info = request()->all();

        $to = [['email' => 'contacto@sagaz.com.ar', 'name' => 'Contacto Sagaz'],
            ['email' => 'gonzalo@sagaz.com.ar', 'name' => 'Gonzalo Sagaz'],
            ['email' => 'gonzalobusnadiego@gmail.com', 'name' => 'Gonzalo']];

        Mail::to('contacto@sagaz.com.ar', 'Nuevo Contacto Sagaz')->send(new Contacto($info));

        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

}
