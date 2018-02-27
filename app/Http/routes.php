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
    return view('welcome');
});

Route::auth();
Route::group([ 'middleware' => 'auth'], function()
{
    Route::get('/home', 'HomeController@index');
    Route::post('/parsing', 'CsvParsingController@saveFile');
    Route::get('/file/{id}','FileInfoController@getFileInfo');
    Route::get('/delete/file/{id}','FileController@deleteFile');
    Route::get('/user_dashboard','FileController@getFiles');
    Route::post('/save_address','AddressController@saveAddress');
    Route::get('/add_information','AddressController@index');
    Route::get('/delete/address/{id}','AddressController@deleteAddress');
    Route::get('/edit_profile' , function () {
        return view('panel/edit_profile');
    });
    Route::get('/change_password' , function () {
        return view('panel/change_password');
    });

});
Route::get('/about', function (){
    return view('about');
});
Route::get('/contact', function (){
    return view('contact');
});

//Route::get('pdfview/{id}',array('as'=>'pdfview','uses'=>'FileInfoController@pdfview'));

