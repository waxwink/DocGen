<?php

use Illuminate\Support\Facades\Route;
use Pinwork\DocGen\Http\Controller\DocumentationController;

Route::get('/responses', DocumentationController::class . '@responses')->middleware('document.auth');
Route::get('/routes', DocumentationController::class . '@routes')->middleware('document.auth');