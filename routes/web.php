<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('home', [
        "name"=> "soumik Dey",
        "frameworks" => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);
});

Route::get('/users', function(){
    return Inertia::render('users');
});

Route::get('/settings', function(){
    return Inertia::render('settings');
});