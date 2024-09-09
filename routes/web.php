<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('app', [
        "name"=> "soumik Dey",
        "frameworks" => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);
});
