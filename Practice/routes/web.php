<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController as TestController;
use App\Http\Controllers\PageController as PagesController;
use App\Http\Controllers\EmployeeController as EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('test/show',[TestController::class,'show']);

Route::get('test/showHello',[TestController::class,'showHello']);

Route::get('employee/view',[EmployeeController::class,'showView']);

Route::get('test/show/{param1}/{param2}',[TestController::class,'show']);

Route::get('test/sum/{num1}/{num2}',[TestController::class,'sum'])
->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);

Route::get('pages/show/{id}',[PagesController::class,'showOne'])
    ->where('id','[0-9]+');

Route::get('pages/all',[PagesController::class,'showAll']);

Route::get('employee/showOne/{id}',[EmployeeController::class,'showOne'])
    ->where('id','[0-9]+');

Route::get('employee/showField/{id}/{attr}',[EmployeeController::class,'showField'])
    ->where(['id'=>'[0-9]+','attr'=>'^name|surname|salary$']);

Route::get('/', function () {
    return "main page";
});




//Route::get('/test',function (){
//   return "!";
//});

//Route::get('dir/test/',function (){
//   return "!!";
//});

//Route::get('/user/{id}/',function ($id) {
//   return  $id;
//});

//Route::get('/user/{id}/{name}/',function ($id,$name){
//    return "Name of user : $name";
//});

//Route::get('/sum/{num1}/{num2}/',function ($num1,$num2){
//    return $num1 + $num2;
//});

//Route::get('/client/{id?}',function ($id = 0){
//    return $id;
//});

//Route::get("/user/{id}",function ($id){
//  return $id;
//})->where('id','[0-9]+');

//Route::get("user/{id}/{name}",function ($id,$name){
//  return "id - $id". " Name - $name";
//})->where(['id'=>'[0-9]+','name'=>'[a-z]{3,}']);

//Route::get("/articles/{date}/",function ($date){
//    return "Date of creating: $date";
//})->where('date','^(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$');

//Route::get('/users/{order}/',function ($order){
//     return $order;
//})->where('order','^name|surname|age$');

//Route::get('data/{year}/{month}/{day}/',function($year,$month,$day){
//    $dayOfWeek = new DateTime("$year-$month-$day");
//    return $dayOfWeek->format('l');
//})->where(['year'=>'([0-9]{4})','month'=>'(0[1-9]|1[0-2])','day'=>'(0[1-9]|[12][0-9]|3[01])']);

