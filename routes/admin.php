<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin/', 'namespace' => 'App\Http\Controllers'], function(){
    Route::get('home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
});