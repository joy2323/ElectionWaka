<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::resource('posts','CandidateController');*/
// Route::resource('/elect', 'ApisssController');

Route::get('/names', 'CandidateController@candi');
Route::get('candidate', 'CandidateController@index');
Route::get('candidate/{candidate}', 'CandidateController@show');
Route::post('candidate', 'CandidateController@store');
Route::put('candidate/{candidate}', 'CandidateController@update');
Route::delete('candidate/{candidate}', 'CandidateController@delete');

Route::get('answer', 'AnswerController@index');
Route::get('all', 'AnswerController@answers');
Route::get('all/{id}', 'AnswerController@ans');
Route::get('answer/{answer}', 'AnswerController@show');
Route::post('/answer', 'AnswerController@store');
Route::put('answer/{answer}', 'AnswerController@update');
Route::delete('answer/{answer}', 'AnswerController@delete');
// Route::get('every', 'AnswerController@fetchAll');



//route for category
Route::post('/save', 'ApisssController@store');
Route::get('/category', 'ApisssController@index');
Route::get('/show/{category}', 'ApisssController@show');
Route::post('/update/{category}', 'ApisssController@status');
Route::delete('/delete/{category}', 'ApisssController@destory');


//Route for questions
Route::get('/question', 'QuestionController@index');
Route::post('/question', 'QuestionController@store');
Route::get('/question{id}', 'QuestionController@show');
Route::put('/question{id}', 'QuestionController@update');
Route::delete('/question{id}', 'QuestionController@destory');

//Route for querying question
Route::get('/fetch/{id}', 'QuestionController@fetchOne');
Route::get('/fetch', 'QuestionController@fetchAll');


//Add user
Route::post('/user/create','UserController@store');
Route::get('/users','UserController@index');
Route::post('/user/edit/{id}','UserController@edit');
Route::post('/user/auth','UserController@auth');


//To get votes given to evry candidate
Route::post('/polls', 'UserController@pollVote');
Route::post('/request', 'UserController@getVote');
Route::get('/get', 'UserController@polls');
Route::get('/total','UserController@totalpoll');
Route::get('get/{id}', 'UserController@resultVote');
// Route::get('/request', 'UserController@getAll');
