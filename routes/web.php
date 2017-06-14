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
    return view('login');
});

Route::get('/timesheet', function () {
    return view('timesheet');
});

Route::get('/leave_request', function () {
    return view('leave_request');
});

Route::get('/project', function () {
    return view('project');
});
