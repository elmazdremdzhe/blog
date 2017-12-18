<?php

use App\Task;
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
/*
Route::get('/', function () {
    $tasks = DB::table('tasks')->get();

    return view('welcome', [
        'tasks' => $tasks,

        'name' => 'Laracasts'
    ]);
});*/

Route::get('/', 'PostsController@index')->name('home');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');




Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@orshow');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');



