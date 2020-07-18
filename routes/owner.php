<?php

Route::group(['namespace' => 'Owner'], function() {
    Route::get('/', 'HomeController@index')->name('owner.dashboard');
    Route::get('/dashboard', 'HomeController@dashboard')->name('owner.mydashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('owner.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('owner.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('owner.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('owner.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('owner.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('owner.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('owner.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('owner.verification.notice');
    Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('owner.verification.verify');
});
