<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesCategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Auth::routes();

Route::controller(HomeController::class)->group(function () {
    
    Route::get('/','index');
    Route::get('/sobrenosotros','aboutus');
    Route::get('/contacto','contact');
   

});

Route::get('/admin', [AdminController::class,'admin']);

Route::get('/categoria',[CoursesCategoryController::class,'categories']);



/* Route::get('/', [HomeController::class, 'index']); */





