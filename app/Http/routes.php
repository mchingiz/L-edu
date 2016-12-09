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

Route::get('/index', function () {
    return view('index');});
Route::get('/post', function () {
    return view('post');});
Route::get('/category', function () {
    return view('category');});
Route::get('/jobs', function () {
    return view('category');});
Route::get('/company', function () {
    return view('company');});
Route::get('/company/posts', function () {
    return view('companyposts');});
Route::get('/company/info', function () {
    return view('companyinfo');});
Route::get('/add', 'PostController@addPost');
Route::post('/add', 'PostController@storePost');


Route::get('/test/{test}', 'Test@test');
Route::get('/test', 'Test@url');
//Register
Route::auth();
Route::get('/register/company', 'Auth\AuthController@registerform');
Route::get('/register/user', 'Auth\AuthController@registerform');

//company
Route::get('/company/editprofile', 'CompanyController@EditProfile');
Route::post('/company/editprofile', 'CompanyController@Update');



Route::get('/home', 'HomeController@index');
