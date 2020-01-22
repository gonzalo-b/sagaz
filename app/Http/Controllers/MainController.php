<?php

namespace App\Http\Controllers;

use App\Mail\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{

    public function sendMail(){

        $info = request()->all();

//        $to = [
//            ['email' => 'gonzalo@sagaz.com.ar', 'name' => 'Gonzalo Sagaz'],
//            ['email' => 'gonzalobusnadiego@gmail.com', 'name' => 'Gonzalo']
//        ];

        $email = "contacto@sagaz.com.ar";
        $subject = "Nuevo Contacto Sagaz";
//        Mail::to(['email' => 'contacto@sagaz.com.ar', 'name' => 'ContactoSagaz'], 'Nuevo Contacto Sagaz')->send(new Contacto($info));

        Mail::send('emails.nuevoContacto', $info, function($message) use ($email, $subject, $info) {
            $message->to($email)->subject($subject);
        });


        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

}
