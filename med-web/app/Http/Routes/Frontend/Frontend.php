<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('macros', 'FrontendController@macros')->name('frontend.macros');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('accounts/create/', 'AccountsController@create')->name('frontend.accounts.create');
        Route::get('accounts/create/step1/guarantor', 'AccountsController@createstep1g')->name('frontend.accounts.createstep1guarantor');
        Route::get('accounts', 'AccountsController@index')->name('frontend.accounts.index');
        Route::post('accounts/create/', 'AccountsController@store');
        Route::post('accounts/create/step1/guarantor', 'AccountsController@store');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
        Route::get('accounts/create/step2/patient', 'FactorsController@create')->name('frontend.accounts.create_factors_patient');
        Route::post('accounts/create/step2/patient', 'FactorsController@store');
        Route::get('accounts/create/eligibility/patient', 'FactorsController@success')->name('frontend.accounts.eligibility');
        Route::get('accounts/update/{id}', array('as'=>'page', 'uses'=>'AccountsController@updateApplication'));
        Route::get('accounts/save/{id}', array('as'=>'page', 'uses'=>'AccountsController@saveApplication'));
    });
});