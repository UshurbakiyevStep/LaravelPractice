<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RedirectController extends Controller
{

    public function form() {
        return view('components/redirect/redirect-number-form');
    }
    public function show1(Request $request) {
        if ($request->has('num')) {
            $num = $request->input('num');
            $request->session()->put('num',$num);
            if (in_array($num,range(1,10))){
                return redirect('redirects/two')->withInput();
            } else {
                echo "failed to send, incorrect number.Please,provide number within range 1 to 10";
                return view('components/redirect/redirect-number-form');
            }
        } else {
            return view('components/redirect/redirect-number-form');
        }
    }

    public function show2(Request $request): string
    {
        return "Successfully sent, with input:" . $request->session()->get('num');
    }

    public function emailForm ($id) {
//        $nameRoute = Route::getCurrentRoute();
//        echo $nameRoute->uri(); with this we can get current path for routing
        return view('components/redirect/redirect-email-form');
    }

    public function emailOne (Request $request,$id) {
        if ($request->has('mail'))  {
            $email = $request->input('mail');
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                echo "Incorrect email, please input correct one.";
                return view('components/redirect/redirect-email-form');
            }
            $request->session()->put('email',$email);
            $url = route('emailTwo',['id'=>$id]);
            return redirect($url)->withInput();
        } else {
            return view('components/redirect/redirect-email-form');
        }
    }

    public function emailTwo (Request $request) {
        return "For id:". $request->id. "<br>Correct email: ". $request->session()->get('email');
    }



}
