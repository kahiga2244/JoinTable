
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JointableController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('join_table', [JointableController::class, 'index']);
