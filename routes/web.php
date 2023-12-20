<?php

// routes/web.php

use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'index']);

use App\Http\Controllers\AjaxController;
Route::get('/ajax-example', [AjaxController::class, 'index']);
Route::post('/ajax-example', [AjaxController::class, 'getData']);
