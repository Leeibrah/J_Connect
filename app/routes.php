<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller('/test','TestController');

//Super Administrator

Route::group(array(),function(){
    Route::controller('/supervisor','SuperController');
});

//Back end controllers
Route::group(array(),function(){
   //TODO Remove this extra route. For now used to route images
   Route::controller('/admin/admin','BackController');
   Route::controller('/admin','BackController');
   
});

//Front end controllers group 
Route::group(array(),function(){
    Route::controller('/','FrontController');
});

