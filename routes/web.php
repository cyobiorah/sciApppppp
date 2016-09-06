<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sample-restful-apis', function() {
  return array(
    1 => "userInfo",
    2 => "demo"
  );
});

// Route::group(array('prefix' => 'api'), function() {
//   Route::resources('restful-apis', 'APIController');
// });
