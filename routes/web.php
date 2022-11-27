<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;


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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function()
{
	// Route::group(['middleware' => 'admin.guest'], function(){
		Route::get('/login', [LoginController::class, 'indexAction'])->name('login.indexAction');   
		Route::post('/login', [LoginController::class, 'loginAction'])->name('login.loginAction');


		Route::get('/dashboard', [DashboardController::class, 'indexAction'])->name('dashboard.indexAction');
		
	//	});
});
