<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin', [App\Http\Livewire\Admin\Dashboard\Index::class, 'render'])->name('admin.dashboard');
Route::get('admin/user', [App\Http\Livewire\Admin\User\Index::class, 'render'])->name('admin.user');
Route::post('admin/user-ajax', [App\Http\Controllers\Admin\ManageAccountController::class, 'ajaxuser'])->name('admin.user-ajax');


// Route::group(['middleware' => 'level', 'prefix' => 'admin'], function() {
//     Route::resource('/', 'AdminkelolaakunController');
//     // Route::get('adminkelolaakun/update', 'AdminKelolaakunController@update')->name('adminkelolaakunupdate');
// });
