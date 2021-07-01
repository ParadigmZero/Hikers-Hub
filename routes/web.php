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
// Route::get('/hikes', [HikeController::class, 'index'])->name('hikes.index');

// Route::get('/hikes/create', [HikeController::class, 'create'])->name('hikes.create');

// Route::post('/hikes', [HikeController::class, 'store'])->name('hikes.store');

// // Get a single hike by an id
// Route::get('/admin/hikes/{hike}/{slug?}', [HikeController::class, 'show'])->name('hikes.show');

// // aim is to delete
// // Get a single hike by an id
// Route::delete('/hikes/{hike}', [HikeController::class, 'delete'])->name('hike.delete');

Route::resource('hikes', HikeController::class);




// update

// PUT ( full modification )
// Route::put('/hikes/{id}', [HikeController::class, 'update']);

// root just goes to hikes for now
Route::redirect('/', '/hikes');

// form and method spoofing.


// RESTful of routes to be able to explore the range of hike

// show a specific hike
// get hikers-hub.com/hikes/123

// delete a hike
// delete hikers-hub.com/hikes/123
