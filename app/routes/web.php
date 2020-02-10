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

Auth::routes();

Route::get('home', function () {
    return view('vue')->with([
        'title' => 'Title test',
        'vue' => 'be-table',
        'params' => [
            'type' => 'incoming',
        ],
    ]);
});
Route::get('messages/{type}', function ($type) {
    return App\Message::whereType($type)->orderBy('created_at', 'desc')->get();
});
Route::post('messages/{type}', function ($type) {
    return App\Message::create([
        'type' => request('type'),
    ]);
});
