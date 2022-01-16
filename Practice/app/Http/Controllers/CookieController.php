<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DateTime;
use Exception;
use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function taskOne(Request $request)
    {
        $currentTime = date('Y-m-d h:i:s');
        $pastVisitTime = $request->cookie('visitTime');

        if ($pastVisitTime) {
            try {
                $currentTime = new DateTime($currentTime);
                $pastVisitTime = new DateTime($pastVisitTime);
                $diff = $currentTime->diff($pastVisitTime);
                return response('User visited this page previously the difference is - ' .
                    $diff->m . " month "
                    . $diff->days . " days "
                    . $diff->h . " hours "
                    . $diff->i . " minutes "
                    . $diff->s . " sec "
                    . " ago")
                    ->cookie('visitTime', $currentTime->format('Y-m-d h:i:s'), 2000);

            } catch (Exception $e) {
                return $e->getMessage();
            }
        }
        return response('User visited this page for the first time')->cookie('visitTime', $currentTime, 2000);
    }

    public function taskTwo(Request $request)
    {
        if ($request->birthday) {
            return response('Спасибо за ответ, мы запомним его)')
                ->withCookie(cookie()->forever('birthday', $request->birthday));
        }
        $date_of_birth = $request->cookie('birthday');
        $current_date = date('Y-m-d');
        if (!$date_of_birth) {
            return view('components/cookies/birthday-form');
        }
        if ($date_of_birth == $current_date) {
            return response('Поздравляем с днем рождения, желаем всего наилучшего!');
        }
        return "Рады вас видеть на нашем сайте!";
    }

    public function taskThree(Request $request)
    {
        $amount = $request->cookie('visitCounter');
        if (!$amount) {
            $amount = 1;
            return response('Hello, you have visited our web site for the first time')
                ->withCookie(cookie()->forever('visitCounter',$amount + 1));
        }
        return response('Hello, you have visited our web site for '. $amount .' times')
            ->withCookie(cookie()->forever('visitCounter',$amount + 1));
    }
}
