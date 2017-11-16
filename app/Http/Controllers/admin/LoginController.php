<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
class LoginController extends Controller
{
     public function index()
    {
        return view('admin.login');
        // echo 1;
    }

    public function doMessage(Request $request)
    {   

        $config = [
		    'accessKeyId'    => 'LTAIU84SmSTfGshW',
		    'accessKeySecret' => 'hSNxYUz5O7G5tyutTNfYT5OwUyfk7C',
		];

		$client  = new Client($config);
		$sendSms = new SendSms;
		$sendSms->setPhoneNumbers($request->phone);
		$sendSms->setSignName('wdy博客');
		$sendSms->setTemplateCode('SMS_111445029');
		$sendSms->setTemplateParam(['code' => rand(100000, 999999)]);
		$sendSms->setOutId('demo');

		print_r($client->execute($sendSms));
    }
}
