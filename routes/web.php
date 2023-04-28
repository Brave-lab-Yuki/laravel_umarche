<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Owner\ComponentTestController;
use App\Http\Controllers\LifeCycleTestController;
use App\Http\Controllers\PostController;



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

Route::get('/', function () {
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

    Route::get('/component-test1', [ComponentTestController::class, 'showComponent1']);
    Route::get('/component-test2', [ComponentTestController::class, 'showComponent2']);
    Route::get('/servicecontainer', [LifeCycleTestController::class, 'showServiceContainerTest']);


require __DIR__.'/auth.php';
