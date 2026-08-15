<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cicd-test', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'CI/CD is working',
    ]);
});