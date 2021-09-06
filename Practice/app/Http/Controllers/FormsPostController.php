<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsPostController extends Controller
{
        public function forms ()
        {
            return view('components/forms-post-form');
        }
        public function result (Request $request) {
            return view('components/forms-post-result',['text'=>$request->text]);
        }
}
