<?php

use App\Http\Controllers\userController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

route::get('/crud', function(){
    return view('crud');
})->name('crud');

route::get('/edit-user/{id}', [userController::class, 'editUser'])->name('editUser');



