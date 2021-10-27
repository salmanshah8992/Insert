<?php

use Illuminate\Support\Facades\Route;


//contact

Route::get('/','Mycontroller@contact');
Route::post('/store.contact','Mycontroller@store')->name('store.contact');
Route::get('/show.contact','Mycontroller@contactshow');





//About
Route::get('/about','AboutController@about');
Route::post('/store.about','AboutController@aboutestore')->name('store.about');
Route::get('/show.about','AboutController@aboutshow');