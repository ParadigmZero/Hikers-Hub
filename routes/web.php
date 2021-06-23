<?php

use App\Http\Controllers\HikeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Get all hikes
Route::get('/hikes', [HikeController::class, 'index']);

// Get a single hike by an id
Route::get('/hikes/{id}/{slug?}', [HikeController::class, 'show']);

// root just goes to hikes for now
Route::redirect('/', '/hikes');



// RESTful of routes to be able to explore the range of hike

// show a specific hike
// get hikers-hub.com/hikes/123

// delete a hike
// delete hikers-hub.com/hikes/123
