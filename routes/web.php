<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return view('welcome');
});

//Customer
Route::group(['prefix' => 'customer'],function(){
     Route::get('register','CustomerController@register')->name('customer#register');
     Route::post('create','CustomerController@create')->name('customer#create');
     Route::get('list','CustomerController@list')->name('customer#list');
     Route::get('seeMore/{id}','CustomerController@seeMore')->name('customer#seeMore');
     Route::get('delete/{id}','CustomerController@delete')->name('customer#delete');
     Route::get('edit/{id}','CustomerController@edit')->name('customer#edit');
     Route::post('update/{id}','CustomerController@update')->name('customer#update');
     Route::get('confirm','CustomerController@confirm')->name('customer#confirm');
     Route::get('realUpdate','CustomerController@realUpdate')->name('customer#realUpdate');
    
});
