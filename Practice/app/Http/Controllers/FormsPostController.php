<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsPostController extends Controller
{
    public function forms()
    {
        return view('components/forms-post-form');
    }

    public function result(Request $request)
    {
        echo $request->method() . PHP_EOL;
        if ($request->isMethod('POST')) {
            echo "!!";
        } else if ($request->isMethod('GET')) {
            echo "!";
        }
        return view('components/forms-post-result', ['text' => $request->text]);
    }

    public function formNum(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('components/forms-ask-numbers_ex');
        }
        if ($request->isMethod('post')) {
            return view('components/forms-ask-numbers_ex_result', ['num1' => $request->num1, 'num2' => $request->num2]);
        }
    }

    public function formAll(Request $request,$id) {
        return view('components/forms-all',['id'=>$id]);
    }
    public function formAllResult(Request $request,$id) {
        $data = $request->only(['num1']);
        $data = $request->except(['num1']);
        return view('components/forms-all-result',['all'=>$data,'id'=>$id]);
    }

    public function test (Request $request) {
        $path = $request->path();
        $url = $request->url();
        $fullUrl = $request->fullUrl();
        $fullUrlAdd = $request->fullUrlWithQuery(['page'=>1]);
        $uri = $request->getRequestUri();
        print_r($request->getRequestUri());echo "<br>";
        if ($request->is($uri)) $fullUrl = $request->fullUrlWithQuery(['num'=>1]);
        else $fullUrl = $request->fullUrlWithQuery(['num'=>-1]);
        return view(
            'components/forms-get',
            ['req'=>$request->all(),
                'path'=>$path,
                'url'=>$url,
                'fullurl'=>$fullUrl
            ]
        );
    }
}
