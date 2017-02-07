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

// Route::get('/index', function () {
//     return view('index');});
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



// Index
Route::get('/','HomeController@index');

Route::get('/index', function(){
  return view('index');
});
Route::get('/test/{post}', 'Test@test');

// Register
Route::auth();
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('/register/company', 'Auth\AuthController@registerform');
Route::get('/register/user', 'Auth\AuthController@registerform');

// company
Route::get('/company/editprofile', 'CompanyController@EditProfile');
Route::post('/company/editprofile', 'CompanyController@Update');
Route::get('/company/{slug}/info', 'CompanyController@ViewInfo');
Route::get('/company/{slug}/posts', 'CompanyController@ViewPosts');
Route::post('/company/follow/{id}', 'CompanyController@Follow');
Route::delete('/company/unfollow/{id}', 'CompanyController@Unfollow');

// Posts
Route::get('/post/{slug}', 'PostController@View');
Route::get('/editPost/{post}', 'PostController@editPost');
Route::post('/editPost/{post}', 'PostController@updatePost');
Route::post('/deletePost/{post}', 'PostController@deletePost');
Route::get('/restorePost/{post}', 'PostController@restorePost');
Route::get('/add', 'PostController@addPost');
Route::post('/add', 'PostController@storePost');

// Admin Panel
Route::get('/adminPanel', 'HomeController@adminPanel');
  // Posts
  Route::get('/waitList', 'PostController@waitList');
  Route::get('/approvedList', 'PostController@approvedList');
  Route::get('/refusedList', 'PostController@refusedList');
    //Actions
    Route::post('/approvePost/{post}','PostController@approvePost');
    Route::post('/refusePost/{post}','PostController@refusePost');
  // Users
  Route::get('/users', 'UserController@userList');
  Route::get('/companies', 'UserController@companyList');
  Route::get('/companyWaitList', 'UserController@companyWaitList');




//Saved posts
Route::get('/post/save/{id}', 'SavedPostController@SavePost');
Route::delete('/post/unsave/{saved_post}', 'SavedPostController@UnSavePost');
Route::get('/savedposts', 'SavedPostController@View');

//reminder
Route::post('/post/addreminder/{id}', 'ReminderController@AddReminder');
Route::post('/post/deletereminder/{reminder}', 'ReminderController@DeleteReminder');
Route::get('/reminders', 'ReminderController@View');

//tags
Route::get('/tag/{slug}', 'TagController@View');

//Menu
Route::get('/{slug}', 'MenuController@View');
  //Subcategory
  Route::get('/{slug}/{subslug}', 'SubcategoryController@View');


Route::post('/search', 'SearchController@View');




Route::get('/home', 'HomeController@index');
