<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @return object
     *
     */
    public function testBlade() : object {
        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];
        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];

        $users = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];

        $dayMonth = [
            1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31
        ];
        $currentDay = 10;

        return view('components/test.test-blade',
            ['arr'=>$links,'employees'=>$employees,'users'=>$users,'month'=>$dayMonth,'day'=>$currentDay]);
    }
    public  function  inheritanceView() : object {
        return  view('components/test.test-inheritance-child',['title'=>'TestTitle','aside'=>'TestAside']);
    }

    public function testLoop():object {
        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
        ];

        return view('components/test.test-loops',[
            'arrNums'=>[1,2,3,4,5,6,7,8,9,0],
            'arrStrings'=>['Well done','In this case','Wanna do smth?'],
            'data'=>1,
            'arrNested'=>[[1,2,3,4,5],[6,7,8,9,10],[11,12,13,14,15],[16,17,18,19,20],[21,22,23,24,25]],
            'employees'=>$employees,
            'arrStr'=>[]
        ]);
    }

    public  function testCond():object {
            return view('components/test.test-condition',['dayOfWeek'=>7,'Month'=>3,'age'=>17,'arr'=>[
                'one'=>1,'two'=>2,'three'=>3,'four'=>4
            ]]);
    }
    public function arrWork():object {
            return view('components/test.test-arr',
                ['arr'=>['name'=>'Davlat','salary'=>111111,'age'=>21,'city'=>'Almaty'],
                    'location'=>['country'=>'Kazakhstan','city'=>'Almaty'],
                    'year'=>2021,'month'=>6,'day'=>12,'str'=>'<b>string</b>']);
    }
    public function insertCSS($cssClass,$cssColor,$input1,$input2,$input3,$href,$text):object {
        return view('components/test.css-insert',['cssClass'=>$cssClass,'cssColor'=>$cssColor,
            'input1'=>$input1,'input2'=>$input2,'input3'=>$input3,'href'=>$href,'text'=>$text]);
    }
    public function showInfoView($name,$age,$salary):object {
        return view('components/test.info',['name'=>$name,'age'=>$age,'salary'=>$salary]);
}
    public function showHello():object {
        return  view('components/test.show',['var1'=>1,'var2'=>2]);
    }

    public function show($param1,$param2) : string
    {
        return "TestController ".$param1." ".$param2;
    }

    public function sum($num1,$num2) :int {
        return $num1 + $num2;
    }

}
