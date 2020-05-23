<?php

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create',
'Admin\NewsController@add');
    Route::get('profile/create',
'Admin\ProfileController@add');
    Route::get('profile/edit',
'Admin\ProfileController@edit');
});