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

//Route::get('/', function () {
//    $users = \App\User::count();
//
//
//    return view('welcome', ['count' => $users]);
//});

Route::get('/', 'WelcomeController@index');
Route::get('/terms', 'WelcomeController@terms');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::group(['middleware' => 'auth'], function() {

    Route::resource('team', 'TeamController');
    Route::resource('votes', 'VoteController');
    Route::resource('project', 'ProjectController');
    Route::get('project/{id}/join', 'ProjectController@join');
    Route::resource('posts', 'PostController');
    Route::resource('swag', 'SwagController');
    Route::resource('request', 'JoinController');
    Route::get('request/{id}/{project_id}/{status}', 'JoinController@joinUpdate');
    Route::get('user/{user_id}', 'UserController@profile');
    Route::get('project/{project_id}/vote/{vote_type}', 'VotingController@addVote');
    Route::get('project/{project_id}/success', function() {

        return view('project.success');

    });

});