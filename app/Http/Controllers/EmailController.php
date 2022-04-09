<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(Request $request){
        $data= array();
        $data['message']=$request->message;
		$json = json_decode(file_get_contents('https://newsapi.org/v2/everything?q=tesla&from=2022-04-08&sortBy=publishedAt&apiKey=e40c175c22d147c7befbafe93b247201'), true); // get global news
		$data['top news']=$json['articles'][0]["title"];

		$details=[
            'title' => 'Mail from laravel app',
            'body' => $data['message'],
			'news' =>$data['top news']
        ];
		mail::to('rajeev11153@gmail.com')->send(new TestMail($details)); // send to users , for now i send only to one
		return 'Mail Sent';
    }
}
