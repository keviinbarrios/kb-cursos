<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesCategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\Cache\Store;
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

Route::controller(AdminController::class)->group(function () {

    Route::get('/admin/cursos','admin')->name('admin.courses');
    Route::get('/admin/cursos/create','create')->name('admin.create');
    Route::post('/admin/cursos/create', 'store')->name('admin.store');
    Route::post('/admin/categoria/create', 'storeCategory')->name('admin.storeCategory');
    Route::get('/admin/categoria','category')->name('admin.categories');
    Route::get('/admin/categoria/create','createCategory')->name('admin.createCategory');
    
});






Route::get('/categoria',[CoursesCategoryController::class,'categories']);





/* Route::get('/', [HomeController::class, 'index']); */





