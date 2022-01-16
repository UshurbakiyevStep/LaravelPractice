<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
        public function taskOne (Request $request) {
            return response('Hello World! I am here.',200)->withHeaders([
                'Content-Type'=>'text/plain',
                'X-header-One' => 'Davlat Laravel',
                'X-header-Two' => 'Laravel is pretty'
            ]);
        }
        public function taskOneAnotherVariation (Request $request) {
            return (new Response('Hello, it is another variation of response',200))
                ->header('Content-Type', 'text/plain')
                ->header('X-header-One','Davlat Laravel 1')
                ->header('X-header-Two','Laravel is pretty 1');
        }

        public function taskTwo (Request $request) {
            return response()->view('components/responses')->header('Content-Type', 'text/plain');
        }
}
