<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function SendMail()
    {
        $details = [
            'title' => 'Mail From Active Ecommerce',
            'body' => 'This is body',
        ];

        Mail::to("rejakhan243@gmail.com")->send(new TestMail($details));
        return "Mail Sent";
    }
}
