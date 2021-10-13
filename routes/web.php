<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;
use App\Http\Controllers\viewAllSchoolController;
use App\Http\Controllers\CrudSchoolController;
use App\Http\Controllers\SchoolVerificationController;

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

Route::get('/', [
    'uses'=>'App\Http\Controllers\viewAllSchoolController@index',
    'as' => 'index'
]);

Route::post('/filter', 'App\Http\Controllers\viewAllSchoolController@filter')->name('home.filter');

Route::get('appkey_admin/', [
        'uses'=>'App\Http\Controllers\CrudSchoolController@show_by_admin',
        'as' => 'index'
]);


Route::get('detail', function () {
    return view('detail');
});

Route::get('/detail/{nama_sekolah}', 'App\Http\Controllers\viewAllSchoolController@detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/school_verification', [SchoolVerificationController::class, 'store'])->name('school_verification.post');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	//  Route::get('map', function () {return view('pages.maps');})->name('map');
	//  Route::get('icons', function () {return view('pages.icons');})->name('icons');
	//  Route::get('table-list', function () {return view('pages.tables');})->name('table');

	Route::get('appkey_admin/', ['uses'=>'App\Http\Controllers\CrudSchoolController@show_by_admin','as' => 'index']);
	Route::get('/appkey_admin/add', 'App\Http\Controllers\CrudSchoolController@add')->name('tambah_sekolah');
// Route::get('/appkey_admin/main', 'App\Http\Controllers\CrudSchoolController@show');
	Route::get('/appkey_admin/main', 'App\Http\Controllers\CrudSchoolController@show_by_admin')->name('/appkey_admin/main');
	Route::post('/appkey_admin/add_process', 'App\Http\Controllers\CrudSchoolController@add_process');
// Route::get('/appkey_admin/detail/{id}', 'App\Http\Controllers\CrudSchoolController@detail');
	Route::get('/appkey_admin/edit/{id}', 'App\Http\Controllers\CrudSchoolController@edit');
	Route::post('/appkey_admin/edit_process', 'App\Http\Controllers\CrudSchoolController@edit_process')->name('admin.edit_process');
	Route::get('/appkey_admin/delete/{nama_sekolah}', 'App\Http\Controllers\CrudSchoolController@destroy');

	Route::get('/appkey_admin/kategori', 'App\Http\Controllers\CrudCategoryController@show')->name('kategori_sekolah');
	Route::get('/appkey_admin/add_kategori', 'App\Http\Controllers\CrudCategoryController@add')->name('tambah_kategori');
	Route::post('/appkey_admin/kategori_process', 'App\Http\Controllers\CrudCategoryController@add_process');
	Route::get('/appkey_admin/edit_kategori/{id}', 'App\Http\Controllers\CrudCategoryController@edit');
	Route::post('/appkey_admin/kategori_edit', 'App\Http\Controllers\CrudCategoryController@edit_process');
	Route::get('/appkey_admin/delete_kategori/{nama_kategori}', 'App\Http\Controllers\CrudCategoryController@destroy');

	Route::get('/appkey_admin/akreditasi', 'App\Http\Controllers\CrudAccreditationController@show')->name('akreditasi_sekolah');
	Route::get('/appkey_admin/add_akreditasi', 'App\Http\Controllers\CrudAccreditationController@add')->name('tambah_akreditasi');
	Route::post('/appkey_admin/akreditasi_process', 'App\Http\Controllers\CrudAccreditationController@add_process');
	Route::get('/appkey_admin/edit_akreditasi/{id}', 'App\Http\Controllers\CrudAccreditationController@edit');
	Route::post('/appkey_admin/akreditasi_edit', 'App\Http\Controllers\CrudAccreditationController@edit_process');
	Route::get('/appkey_admin/delete_akreditasi/{id}', 'App\Http\Controllers\CrudAccreditationController@destroy');

	Route::get('/appkey_admin/status', 'App\Http\Controllers\CrudStatusController@show')->name('status_sekolah');
	Route::get('/appkey_admin/add_status', 'App\Http\Controllers\CrudStatusController@add')->name('tambah_status');
	Route::post('/appkey_admin/status_process', 'App\Http\Controllers\CrudStatusController@add_process');
	Route::get('/appkey_admin/edit_status/{id}', 'App\Http\Controllers\CrudStatusController@edit');
	Route::post('/appkey_admin/status_edit', 'App\Http\Controllers\CrudStatusController@edit_process');
	Route::get('/appkey_admin/delete_status/{id}', 'App\Http\Controllers\CrudStatusController@destroy');

	Route::get('/appkey_admin/provinsi', 'App\Http\Controllers\CrudProvinceController@show')->name('daerah_sekolah');
	Route::get('/appkey_admin/add_provinsi', 'App\Http\Controllers\CrudProvinceController@add')->name('tambah_daerah');
	Route::post('/appkey_admin/provinsi_process', 'App\Http\Controllers\CrudProvinceController@add_process');
	Route::get('/appkey_admin/edit_provinsi/{id}', 'App\Http\Controllers\CrudProvinceController@edit');
	Route::post('/appkey_admin/provinsi_edit', 'App\Http\Controllers\CrudProvinceController@edit_process');
	Route::get('/appkey_admin/delete_provinsi/{id}', 'App\Http\Controllers\CrudProvinceController@destroy');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::get('/appkey_admin/verifikasi', 'App\Http\Controllers\SchoolVerificationController@show')->name('verifikasi');
    Route::get('/appkey_admin/delete_verifikasi/{id}', 'App\Http\Controllers\SchoolVerificationController@destroy');

    Route::put('/appkey_admin/school_verification/{id}', [SchoolVerificationController::class, 'update'])->name('school_verification');
    // Route::get('/appkey_admin/verifikasi/','App\Http\Controllers\SchoolVerificationController@detail')->name('detail');
});

