<?php

Route::group(['namespace' => 'Visitor'], function() {
    Route::get('/', 'HomeController@index')->name('visitor.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('visitor.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('visitor.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('visitor.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('visitor.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('visitor.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('visitor.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('visitor.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('visitor.verification.notice');
    Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('visitor.verification.verify');
});