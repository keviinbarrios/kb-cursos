<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
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
    Route::get('/admin/categoria','category')->name('admin.categories');
});

Route::controller(CourseController::class)->group(function () {
    
    Route::get('/admin/cursos/create','create')->name('admin.create');
    Route::post('/admin/cursos/store', 'store')->name('admin.store');
    Route::get('/admin/cursos/{course}/edit', 'edit')->name('admin.edit');
    Route::post('/admin/cursos/{course}/edit', 'update')->name('admin.update');
    Route::delete('/admin/cursos/{course}/delete','delete')->name('admin.delete');
});




Route::controller(CoursesCategoryController::class)->group(function () {

    Route::get('/categoria','categories');
    Route::post('/admin/categoria/create', 'storeCategory')->name('admin.storeCategory');
    Route::get('/admin/categoria/create','createCategory')->name('admin.createCategory');
    Route::delete('/admin/categoria/{id}/delete','deleteCategory')->name('admin.deleteCategory');
    Route::get('/admin/categoria/{id}/edit','editCategory')->name('admin.editCategory');
    Route::put('/admin/categoria/{id}/edit','updateCategory')->name('admin.updateCategory');

});







/* Route::get('/', [HomeController::class, 'index']); */





