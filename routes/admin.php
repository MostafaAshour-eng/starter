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
route::group(['namespace'=>'Front'], function (){
    Route::get('/admin', 'AdminController@showAdminName');
});



Route::get('/admin/test1', function () {
    return ' welcome';
});



//passing parameters

//mandatory
Route::get('login', function () {
    return View('login');
}) ->name('login');
//optional
//Route::get('/users', function () {
//    return '$id';
//}) ->name('a');

//route::namespace('Front')->group(function (){
//    route::get('users', 'AdminController@showAdminName');
//});


route::group([ 'namespace'=>'Front'],  function (){
    route::get('/', function (){
        $images = \File::allFiles(public_path('img'));
        return view('bootstrap')->with('images',$images);
    });
    route::get('show', 'AdminController@showAdminName');
    route::post('show', 'AdminController@showAdminName');
    route::put('show', 'AdminController@showAdminName');
    route::delete('show', 'AdminController@showAdminName');

});

route::get('check', function (){
    return 'middleware';
}) ->middleware('auth');


