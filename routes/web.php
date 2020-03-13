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

Route::get('/challenges', 'ChallengeController@index')->name('challenges');
Route::resource('challenges', 'ChallengeController');

Route::get('/organizers', 'OrganizerController@index')->name('organizers');
Route::resource('organizers', 'OrganizerController');
Route::post('/organizers/updateChallenge', 'OrganizerController@updateUser')->name('updateCh');

Route::get('/organizers/changeStatus/{id}', 'OrganizerController@changeStatus')->name('changeStatus');
Auth::routes();
Route::get('/admins', function () {
    return view('admin');
});

// Route::get('/organizers', function () {
//     return view('organizer');
// });

Route::resource('results', 'ParticipationController');
Route::get('/results', 'ParticipationController@index')->name('results');
Route::get('/stats', function () {
    return view('stats');
});
Route::post('/challenges/updateChallenge', 'ChallengeController@updateChallenge')->name('updateCh');

Route::post('/challenges/closeChallenge/{id}', 'ChallengeController@closeChallenge')->name('closeChallenge');
Auth::routes();
Route::get('/challenges/changeStatus/{id}', 'ChallengeController@changeStatus')->name('changeStatus');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/organizer', 'OrganizerController@index')->name('organizer')->middleware('organizer');
Route::get('/participant', 'ParticipantController@index')->name('participant')->middleware('participant');
