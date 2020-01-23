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

        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".env('GOOGLE_CAP_SECRET_KEY')."&response=".$info->captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

        $email = "gonzalo@sagaz.com.ar";
        $subject = "Nuevo Contacto Sagaz";
//        Mail::to(['email' => 'contacto@sagaz.com.ar', 'name' => 'ContactoSagaz'], 'Nuevo Contacto Sagaz')->send(new Contacto($info));

        Mail::send('emails.nuevoContacto', $info, function($message) use ($email, $subject, $info) {
            $message->from('contacto@sagaz.com.ar', 'Sagaz') ->to($email)->subject($subject);
        });


        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

}
