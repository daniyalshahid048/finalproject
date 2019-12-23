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
    return view('index');
});
Route::get('/m','student@admingetdestroy');
Route::get('/service', function () {
    return view('services');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/indexx', function () {
    return view('index');
});
Route::get('/saa', function () {
    return view('services');
});
Route::get('/a','student@adminget');
Route::post('/zzza', 'student@adminlog1');
Route::get('/zzz', 'student@adminlog');
Route::post('/zabc', 'student@elog1');
Route::get('/ab','student@elog2');
Route::get('/as', function () {
    return view('addemploylog');
});
Route::get('/za', 'student@acc');
Route::get('/aa','student@adminlog2');
Route::get('/vfvf','student@elog3');
Route::post('/zzzab','student@admindel');
Route::get('/ac','student@admindisplay');
Route::get('/ad','student@admindisplayy');
Route::post('/oo','student@admindisplayy1');
Route::post('/ooa','student@admindisplayy2');
Route::get('/aeee','student@done');
Route::get('/af', function () {
    return view('rating');
});
Route::post('/poi','student@subm');
Route::post('/pi','student@rate');
Route::get('/ba','student@acc');
Route::get('/bb',function () {
    return view('submit');
});
Route::get('/bc', 'student@bvv');
Route::get('/about', function () {
    return view('about');
});
Route::get('/azx', function () {
    return view('index');
});