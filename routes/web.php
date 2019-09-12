<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/pages', 'Pages\AboutController@index')->name('about');

Route::get('/rental', 'Pages\CarController@index')->name('rental');

Route::get('/car/{id}/{title}', 'Pages\CarController@show')->name('car');

Route::group(['middleware' => 'auth'], function (){

    // LOGGED
    Route::get('/activate-account', 'Auth\ActivateAccount@view')->name('activate_account');

    //LOGGED && ACTIVATED ACCOUNT
    Route::group(['middleware' => ['activated']], function () {
        Route::get('rent/{id}/{title}', 'Account\User\RentController@view')->name('rent_view');
        Route::resource('rent', 'Account\User\RentController');
        Route::get('profile', 'Account\User\ProfileController@index')->name('profile_user');
        Route::get('rented-cars', 'Account\User\ProfileController@rentedCars')->name('rented_cars_u');
    });


    //ADMIN TYPE ACCOUNT
    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function (){
       Route::resource('car', 'Pages\CarController');
       Route::get('edit-car/{id}', 'Pages\CarController@edit')->name('car_edit');
       Route::get('profile', 'Account\Admin\ProfileController@index')->name('profile_admin');
       Route::get('added-cars', 'Account\Admin\ProfileController@addedCars')->name('added_cars');
       Route::resource('category', 'CategoryController');
       Route::get('categories', 'CategoryController@index')->name('categories');
       Route::resource('photo', 'Photo\PhotoController');
    });
});
