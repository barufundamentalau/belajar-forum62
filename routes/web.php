<?php



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('forum', 'Forum\ThreadController@index')->name('threads');

Route::get('forum/thread', 'Forum\ThreadController@show')->name('threads.show');
