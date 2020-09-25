<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function() {
    return "<h1>This is home page</h1>" ;
    });

Route::get("/blog/{id}", function($id) {
    return "<h1>This is blog page : {$id} </h1>" ;
    });

Route::get( "/blog/{id}/edit" , function($id) {
    return "<h1>This is blog page : {$id} for edit</h1>" ;
    });

Route::get("/product/{a}/{b}/{c}", function($a, $b, $c) {
    return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>" ;
    });

Route::get("/category/{a?}", function($a = "mobile") {
    return "<h1>This is category page : {$a} </h1>" ;
    });

Route::get("/order/create", function() {
    return "<h1>This is order form page : ". request("username") ."</h1>" ;
    });

Route::get("/hello", function () {
    return view("hello");
    });

Route::get('/greeting', function () {
    $name = 'James';
    $last_name = 'Mars';
    return view('greeting', compact('name','last_name') );
    });

Route::get( "/gallery" , function(){
    $ant = url("images/ant.jpg");
    $bird = url("images/bird.jpg");
    $cat = url("images/cat.jpg");
    $god = url("images/god.jpg");
    $spider = url("images/spider.jpg");
    return view("test/index", compact("ant","bird","cat","god","spider") );
    });

Route::get("/gallery/ant", function() {
    $ant = url("images/ant.jpg");
    $bird = url("images/bird.jpg");
    $cat = url("images/cat.jpg");
    $god = url("images/god.jpg");
    $spider = url("images/spider.jpg");
    return view("test/id001", compact("ant","bird","cat","god","spider") );
    });

Route::get("/gallery/bird", function() {
    $ant = url("images/ant.jpg");
    $bird = url("images/bird.jpg");
    $cat = url("images/cat.jpg");
    $god = url("images/god.jpg");
    $spider = url("images/spider.jpg");
    return view("test/id002", compact("ant","bird","cat","god","spider") );
    });

Route::get("/gallery/cat", function() {
    $ant = url("images/ant.jpg");
    $bird = url("images/bird.jpg");
    $cat = url("images/cat.jpg");
    $god = url("images/god.jpg");
    $spider = url("images/spider.jpg");
    return view("test/id003", compact("ant","bird","cat","god","spider") );
    });

Route::get("/gallery/{id}", function($id) {
    $ant = url("images/ant.jpg");
    $bird = url("images/bird.jpg");
    $cat = url("images/cat.jpg");
    $god = url("images/god.jpg");
    $spider = url("images/spider.jpg");
    return view("test/id004", compact("ant","bird","cat","god","spider","id") );
    });

Route::get("/myprofile/create","MyProfileController@create");

Route::get("/myprofile/{id}/edit", "MyProfileController@edit");

Route::get("/myprofile/{id}", "MyProfileController@show");

Route::get( "/newgallery" , "MyProfileController@gallery" );
Route::get( "/newgallery/ant" , "MyProfileController@ant" );
Route::get( "/newgallery/bird" , "MyProfileController@bird" );
Route::get( "/newgallery/{id}" , "MyProfileController@newgallery_id" );

Route::get( "/coronavirus" , "MyProfileController@coronavirus" );

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get("/teacher" , function (){
        return view("teacher/index");
    });

    //READ
    Route::middleware(['auth', 'role:admin,teacher'])->group(function () {
        Route::get('/covid19', 'Covid19Controller@index');
        Route::get('/covid19/{id}', 'Covid19Controller@show');
    });
    //WRITE
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/covid19/create', 'Covid19Controller@create');
        Route::post('/covid19', 'Covid19Controller@store');
        Route::get('/covid19/{id}/edit', 'Covid19Controller@edit');
        Route::put('/covid19/{id}', 'Covid19Controller@update');
        Route::delete('/covid19/{id}', 'Covid19Controller@destroy');
    });
    
});

Route::get("/student" , function (){
	return view("student/index");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function () {
//     return view('table');
// });


// Route::get("/covid19/create", "Covid19Controller@create");
// Route::get("/covid19/{id}/edit", "Covid19Controller@edit");
// Route::delete('/covid19/{id}', 'Covid19Controller@destroy');
// Route::get('/covid19', 'Covid19Controller@index');
// Route::get('/covid19/{id}', 'Covid19Controller@show');
// Route::post("/covid19", "Covid19Controller@store");
// Route::patch("/covid19/{id}", "Covid19Controller@update");

//************Staff*********
//Route::resource('/staff','StaffController');
Route::get("/staff/{id}/edit", "StaffController@edit");
Route::get("/staff/create", "StaffController@create");
Route::delete('/staff/{id}', 'StaffController@destroy');
Route::get('/staff','StaffController@index');
Route::get('/staff/{id}', 'StaffController@show');
Route::post("/staff", "StaffController@store");
Route::patch("/staff/{id}", "StaffController@update");

Route::resource('post', 'PostController');
Route::resource('book', 'BookController');
Route::resource('street', 'StreetController');