    <?php

    use App\Http\Controllers\FormsOneController;
    use App\Http\Controllers\FormsPostController;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\Product;
    use App\Http\Controllers\SessionController;
    use App\Http\Controllers\RedirectController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TestController;
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

    Route::get('/',function () {
        return "Hello this is starting page, please use urls to get some response";
    });


//    Route::get('redirects/form',[RedirectController::class,'form']);
//    Route::get('redirects/one',[RedirectController::class,'show1']);
//    Route::get('redirects/two',[RedirectController::class,'show2']);
//
//    Route::get('redirects/{id}/emailForm',[RedirectController::class,'emailForm']);
//    Route::get('redirects/{id}/emailOne',[RedirectController::class,'emailOne'])->name('emailOne');
//    Route::get('redirects/emailTwo',[RedirectController::class,'emailTwo'])->name('emailTwo');

//    Route::get('sessions/lesOne',[SessionController::class,'lessOne']);
//    Route::get('sessions/counter',[SessionController::class,'updatePageCounter']);
//    Route::get('sessions/forgetSession',[SessionController::class,'forgetSession']);
//    Route::get('sessions/deleteAll',[SessionController::class,'deleteAllData']);
//    Route::get('sessions/getAll',[SessionController::class,'getAllData']);

    //Route::get('test/show',[TestController::class,'show']);

//    Route::group(['prefix'=>'forms'],function(){
//        Route::get('/form',[FormsPostController::class,'forms']);
//        Route::post('/result',[FormsPostController::class,'result']);
//        Route::get('/formAll/{id}',[FormsPostController::class,'formAll']);
//    });
//
//    Route::get('test/method',[FormsPostController::class,'test']);
//    Route::match(['get','post'],'forms/NumInput',[FormsPostController::class,'formNum']);
//    Route::match(['get','post'], 'forms/catchAll/{id}',[FormsPostController::class,'formAllResult']);


//    Route::get('formTwoResult',[FormsOneController::class,'result']);
//    Route::get('formTwo',[FormsOneController::class,'form']);
//    Route::get('formOne',[FormsOneController::class,'squareForm']);
//    Route::get('categories',[Product::class,'showCategoryList']);
//    Route::get('category/{catId}',[Product::class,'showCategory']);
//    Route::get('product/{catId}/{prodId}',[Product::class,'showProduct']);
//    Route::get('posts',[PostController::class,'showAll']);
//
//    Route::get('post/{id}',[PostController::class,'showOne'])
//        ->where('id','[0-9]+');
//
//    Route::get('test/testBlade',[TestController::class,'testBlade']);
//
//    Route::get('test/inheritanceView',[TestController::class,'inheritanceView']);
//
//    Route::get('test/testLoops',[TestController::class,'testLoop']);
//
//    Route::get('test/testCondition',[TestController::class,'testCond']);
//
//    Route::get('test/testArr',[TestController::class,'arrWork']);
//
//    Route::get('test/InsertCss/{class}/{cssColor}/{input1}/{input2}/{input3}/{href}/{text}',
//        [TestController::class,'insertCSS'])
//        ->where('class','[a-zA-Z]+');
//
//    Route::get('test/showInfoView/{name}/{age}/{salary}',[TestController::class,'showInfoView'])
//        ->where(['name'=>'[a-zA-z]+','age'=>'[0-9]{2}','salary'=>'[0-9]+']);
//
//    Route::get('test/showHello',[TestController::class,'showHello']);
//
//    Route::get('employee/view',[EmployeeController::class,'showView']);
//
//    Route::get('test/show/{param1}/{param2}',[TestController::class,'show']);
//
//    Route::get('test/sum/{num1}/{num2}',[TestController::class,'sum'])
//    ->where(['num1'=>'[0-9]+','num2'=>'[0-9]+']);
//
//    Route::get('pages/show/{id}',[PagesController::class,'showOne'])
//        ->where('id','[0-9]+');
//
//    Route::get('pages/all',[PagesController::class,'showAll']);
//
//    Route::get('employee/showOne/{id}',[EmployeeController::class,'showOne'])
//        ->where('id','[0-9]+');
//
//    Route::get('employee/showField/{id}/{attr}',[EmployeeController::class,'showField'])
//        ->where(['id'=>'[0-9]+','attr'=>'^name|surname|salary$']);
//
//    Route::get('/', function () {
//        return "main page";
//    });
//



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


