<?php

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

Route::get('/', function () {
    return view('backend.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// General Setting
Route::get('/general-settings', 'GeneralSettingsController@GeneralSettings')->name('GeneralSettings');
Route::post('/general-settings-store', 'GeneralSettingsController@GeneralSettingsStore')->name('GeneralSettingsStore');

Route::get('/dormitory-list', 'DormitoryController@DormitoryList')->name('DormitoryList');
Route::post('/dormitory-store', 'DormitoryController@DormitoryStore')->name('DormitoryStore');
Route::post('/dormitory-update', 'DormitoryController@DormitoryUpdate')->name('DormitoryUpdate');
Route::get('/dormitory-delete/{id}', 'DormitoryController@DormitoryDelete')->name('DormitoryDelete');
Route::get('/dormitory-restore/{id}', 'DormitoryController@DormitoryRestore')->name('DormitoryRestore');
Route::get('/dormitory-permanent-delete/{id}', 'DormitoryController@DormitoryPermanentDelte')->name('DormitoryPermanentDelte');

Route::get('/student-list', 'StudentController@StudentsList')->name('StudentsList');
Route::get('/student-add', 'StudentController@StudentsAdd')->name('StudentsAdd');
Route::post('/student-store', 'StudentController@StudentStore')->name('StudentStore');
