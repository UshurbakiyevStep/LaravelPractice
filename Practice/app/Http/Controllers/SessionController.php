<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function lessOne(Request $request)
    {
        $request->session()->put('message', 'helloWorld');
        session(['key' => 'data']);
        $data = session('key', 'does not have this key value');
        echo $data . "<br>";
        return $request->session()->get('message');
    }

    public function updatePageCounter(Request $request)
    {

        $ctr = $request->session()->get('pageUpdatedCounter', 0);
        $firstTimeVisit = $request->session()->get('FirstTimeVisit', date('Y-m-d h:i:s'));

        $request->session()->put('arr', [1, 2, 3]);
        $request->session()->push('arr', 4);

        $request->session()->put('pageUpdatedCounter', ++$ctr);
        $request->session()->put('FirstTimeVisit', $firstTimeVisit);

        return view('components/sessions/update-page-counter', ['request' => $request]);
    }

    public function forgetSession(Request $request)
    {
        $request->session()->forget('pageUpdatedCounter');
        $firstTimeVisit = $request->session()->pull('FirstTimeVisit', date('Y-m-d h:i:s'));
        $delete = $request->session()->get('pageUpdatedCounter');

        echo "Counter created at:" . $firstTimeVisit . " has to be deleted <br>";

        if (!$request->session()->has('pageUpdatedCounter')) return "Success";
        return "Failed to delete";
    }

    public function deleteAllData(Request $request)
    {
        $request->session()->flush();
        return "All data was deleted";
    }

    public function getAllData(Request $request)
    {
        return $request->session()->all();
    }

    public function createFlashMessage(Request $request)
    {
        $request->session()->flash('action', 'Hello!');
        if ($request->session()->has('action')) {
            return "Success";
        }
        return "Failed";
    }

    public function getFlashMessage(Request $request)
    {
        return view('components/sessions/flash-message');
    }

    public function flashForm(Request $request)
    {

        if (
            $request->has('num1')
            && $request->has('num2')
            && $request->has('num3')
            && $request->has('num4')
            && $request->has('num5')
        ) {
            $request->flash();
        }
        return view('components/sessions/flash-form');
    }

    public function resultForm(Request $request)
    {

        $result = $request->num1 + $request->num2 +
            $request->num3 + $request->num4 + $request->num5;
        Session::flash('resultForm',$result);

        return view('components/sessions/flash-form-result');
    }

    public function flashFormWithOLD(Request $request) {
        $request->flash();
        return view('components/sessions/flash-form-old');
    }

}
