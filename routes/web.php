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
Route::get('/new', function () {
    return view('new');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');
// For admin login 
Route::get('admin/login', 'AdminController@admin');


//Route for candidates
Route::get('/admin/addcandidate', 'AdminController@addCandidate');
Route::post('/admin/addcandidate', 'AdminController@storeCandidate')->name('candi');
Route::get('/admin/viewcandidates', 'AdminController@viewCandidate');
Route::get('admin/viewcandidates/{id}','AdminController@deleteCandidate')->name('delete');

Route::get('admin/editcandidate/{id}','AdminController@editCandidate')->name('edit');
Route::post('admin/editcandidate/{id}', 'AdminController@updateCandidate')->name('update');
	
//Route::get('/admin/manifesto','AdminController@manifesto')->name('manifest');


// Route for category Only
Route::get('/admin/addcategory', 'AdminController@addCategory');
Route::post('/admin/addcategory', 'AdminController@storeCategory');
Route::get('/admin/viewcategories', 'AdminController@viewCategory');
Route::get('/admin/viewcategories/{id}','AdminController@deleteCategory')->name('delcat');
Route::get('/admin/editcategory/{id}','AdminController@editCategory')->name('editcat');
Route::post('/admin/editcategory/{id}','AdminController@updateCategory')->name('upcat');


//Route for question Only
Route::get('/admin/addquestion', 'AdminController@addQuestion');
Route::post('/admin/addquestion', 'AdminController@storeQuestion');
Route::get('/admin/viewquestions', 'AdminController@viewQuestion');
Route::get('/admin/viewquestion/{id}','AdminController@deleteQuestion')->name('quest');
Route::get('/admin/editquestion/{id}','AdminController@editQuestion')->name('editquest');
Route::post('/admin/editquestion/{id}','AdminController@updateQuestion')->name('upquest');
Route::get('/admin/details/{id}','AdminController@detail')->name('details');
Route::post('/admin/answer', 'AdminController@store')->name('question.answer');


//Route for answer Only
Route::get('/admin/addanswer', 'AdminController@addAnswer');
Route::post('/admin/addanswer', 'AdminController@storeAnswer');

Route::get('/admin/viewanswers', 'AdminController@viewAnswer');



// Route for Manifesto Only
Route::get('/admin/addmanifesto', 'ManifestoController@addManifesto');
Route::post('/admin/addmanifesto', 'ManifestoController@storeManifesto');
Route::get('/admin/viewmanifesto', 'ManifestoController@viewManifesto');

Route::get('/admin/viewmanifesto/{id}','ManifestoController@destoryManifesto')->name('delman');
Route::get('/admin/editmanifesto/{id}','ManifestoController@editManifesto')->name('editman');
Route::post('/admin/editmanifesto/{id}','ManifestoController@updateManifesto')->name('upman');


//Route for Admin User only
Route::get('/admin/viewusers', 'AdminController@viewUser');

Route::get('/logout', 'AdminController@logout');

//Route for Poll Blade
Route::get('/admin/viewpolls', 'AdminController@viewPoll');


//Users Only

// Route::get('/user/indexx', 'VoteController@index');
// Route::group(['middleware'=>'auth'], function(){
Route::get('/user/dashboard', 'VoteController@dashboard');
// Route::get('/user/social', 'VoteController@social');
Route::get('/user/candidates', 'VoteController@candidates');
Route::get('/user/manifesto', 'VoteController@manifesto');

Route::get('/user/result/{email}', 'VoteController@result');
Route::get('/user/questions', 'VoteController@questions');
Route::get('/user/overall', 'VoteController@overall');
// });
//test route
Route::get('/testing',function(){
    return view('test');
});
Route::get('/testing2',function(){
    return view('collecting');
});

Route::get('/user/poll', 'VoteController@polls')->middleware('auth')->name('polll');
// Route::post('/user/poll','VoteController@test');
Route::get('login/{social}', 'Auth\AuthController@redirectToSocial')->where('social','twitter|facebook|google');
Route::get('login/{social}/callback','Auth\AuthController@getSocialCallback')->where('social','twitter|facebook|google');
