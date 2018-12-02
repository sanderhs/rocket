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


Auth::routes();
Route::get('/calendario', function () {
    return view('calendario');
});
Route::get('/contatos', function () {
    return view('contatos');
});
Route::get('/loginfb', function () {
    return view('loginfb');
});
Route::get('/core', function () {
    return view('/core');
});
Route::get('/primeirospassos', function () {
    return view('/primeiroacesso');
});
Route::get('/fb-callback', function () {
    return view('fb-callback');
});


Route::group(['middleware' => ['web','auth']], function(){
  Route::get('/', function () {
      return view('login1');
  });

  Route::get('/index', function() {
    if (Auth::user()->admin == 0) {
      return view('dashboard');
    } else {
      $users['users'] = \App\User::all();
      return view('adminhome', $users);
    }
  });
});