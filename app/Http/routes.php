<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/Schedule', function () {
    return view('Schedule');
});
Route::get('/news', 'PostController@news');

Route::resource("posts","PostController");
Route::resource("messages","MessageController");
Route::resource("employees","EmployeeController");
//added to make url to image to display 
Route::get('images/{filename}', function ($filename)
{
    if (strpos($filename, '_emp') !== false) {
        $path = public_path() . '/upload/employees/' . $filename;
    }
    else{
        $path = public_path() . '/upload/posts/' . $filename;

    }
    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});