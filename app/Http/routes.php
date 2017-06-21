<?php

Route::get('/', 'StaticPageDisplayController@index')->name('homepage');

Route::get('/services', 'StaticPageDisplayController@services')->name('services');

Route::get('/about', 'StaticPageDisplayController@about')->name('about');

Route::get('/contact', 'StaticPageDisplayController@contact')->name('contact');

Route::post('/contact', 'ContactPageMailingController@create')->name('send_mail');
