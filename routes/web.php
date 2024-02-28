<?php

use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;



Route::get('/', function () {
    return view('welcome', ['file' => Storage::Files('/excel')]);
});

Route::post('/upload',  [ExcelController::class, 'upload']);

Route::get('/download', [ExcelController::class, 'download']);

