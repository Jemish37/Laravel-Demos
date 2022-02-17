<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class welcome extends Controller
{
    //
    function sendmail()
    {
        $to_name = 'Jemish';
        $to_email = 'jemish268@gmail.com';
        $data = ["name" => "Jemish Dhameliya","body" => "Hello World"];
        Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Laravel Test Mail');
            $message->from('captain.rogers460@gmail.com','Test Mail');
            });
    }

}
