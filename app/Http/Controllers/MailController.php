<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Mail;



class MailController extends Controller
{
    public function send(){
    	$objDemo = new \stdClass();
    	$objDemo ->sender = 'BookloverShop';
    	$objDemo ->receiver = 'Zhuldyz.Sabitova';
    	Mail::to("zhuldyz.020504@gmail.com")->send(new DemoEmail($objDemo));

    }
}
