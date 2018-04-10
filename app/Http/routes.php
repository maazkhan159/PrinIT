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
    Route::post('/parsing/', 'CsvParsingController@saveFile');
    Route::get('/file/{id}','FileInfoController@getFileInfo');
    Route::get('/delete/file/{id}','FileController@deleteFile');
    Route::get('/user_dashboard','UserController@dashboard');
    Route::get('/amazon','AmazonController@getFiles');
    Route::get('/amazontext','AmazonController@getTextFiles');
    Route::get('/simple','SimpleController@getFiles');
    Route::post('/save_address','AddressController@saveAddress');
    Route::get('/add_information','AddressController@index');
    Route::get('/delete/address/{id}','AddressController@deleteAddress');
    Route::get('/edit_profile' ,'UserController@index');
    Route::patch('user/edit','UserController@update');
    Route::get('/ebayfile', 'EbayController@getFiles');
    Route::patch('user/reset_password','UserController@resetPassword');
    Route::get('/change_password' , function () {
        return view('panel/change_password');
    });

    Route::get('/ebay_stats/{file_id}', 'StatsController@getEbayStats');


    //download csv
    Route::get('/simple_sample_download', 'DownloadFileController@getSimpleSampleFile');
    Route::get('/amazoncsv_sample_download', 'DownloadFileController@getAmazonCsvSampleFile');
    Route::get('/amazontext_sample_download', 'DownloadFileController@getAmazonTextSampleFile');
    Route::get('/ebay_sample_download', 'DownloadFileController@getEbayCsvSampleFile');


});
Route::get('/about', function (){
    return view('about');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/pricing', function (){
    return view('pricing');
});

//Route::get('pdfview/{id}',array('as'=>'pdfview','uses'=>'FileInfoController@pdfview'));

