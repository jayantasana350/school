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

Route::post('/term-store', 'AcademicController@TermStore')->name('TermStore');
Route::get('/acadamic', 'AcademicController@Acadamic')->name('Acadamic');
Route::post('/acadamic-store', 'AcademicController@AcadamicStore')->name('AcadamicStore');
Route::post('/acadamic-update', 'AcademicController@AcadamicUpdate')->name('AcadamicUpdate');
Route::get('/acadamic-delete/{slug}', 'AcademicController@AcadamicDelete')->name('AcadamicDelete');
Route::get('/acadamic-restore/{slug}', 'AcademicController@AcadamicRestore')->name('AcadamicRestore');
Route::get('/acadamic-permanent-delete/{slug}', 'AcademicController@AcadamicPermanentDelte')->name('AcadamicPermanentDelte');

Route::get('/class', 'ClassController@Class')->name('Class');
Route::post('/class-store', 'ClassController@ClassStore')->name('ClassStore');
Route::post('/class-update', 'ClassController@ClassUpdate')->name('ClassUpdate');
Route::get('/class-delete/{slug}', 'ClassController@ClassDelete')->name('ClassDelete');
Route::get('/class-restore/{slug}', 'ClassController@ClassRestore')->name('ClassRestore');
Route::get('/class-permanent-delete/{slug}', 'ClassController@ClassPermanentDelete')->name('ClassPermanentDelete');

Route::get('/class-ajax/{id}', 'ClassController@ClassAjax')->name('ClassAjax');

Route::post('/subclass-store', 'ClassController@SubClassStore')->name('SubClassStore');
Route::post('/subclass-update', 'ClassController@SubClassUpdate')->name('SubClassUpdate');
Route::get('/subclass-delete/{slug}', 'ClassController@SubClassDelete')->name('SubClassDelete');
Route::get('/subclass-restore/{slug}', 'ClassController@SubClassRestore')->name('SubClassRestore');
Route::get('/subclass-permanent-delete/{slug}', 'ClassController@SubClassPermanentDelete')->name('SubClassPermanentDelete');

Route::get('/subjects', 'SubjectController@Subjects')->name('Subjects');
Route::post('/subjects-store', 'SubjectController@SubjectStore')->name('SubjectStore');
Route::post('/subjects-update', 'SubjectController@SubjectUpdate')->name('SubjectUpdate');
Route::get('/subjects-delete/{slug}', 'SubjectController@SubjectDelete')->name('SubjectDelete');
Route::get('/subjects-restore/{slug}', 'SubjectController@SubjectRestore')->name('SubjectRestore');
Route::get('/subjects--permanent-delete/{slug}', 'SubjectController@SubjectPermanentDelete')->name('SubjectPermanentDelete');

Route::get('/fee', 'FeeController@Fee')->name('Fee');
Route::post('/fee-store', 'FeeController@FeeStore')->name('FeeStore');
Route::post('/fee-update', 'FeeController@FeeUpdate')->name('FeeUpdate');
Route::get('/fee-delete/{id}', 'FeeController@FeeDelete')->name('FeeDelete');
Route::get('/fee-restore/{id}', 'FeeController@FeeRestore')->name('FeeRestore');
Route::get('/fee-permanent-delete/{id}', 'FeeController@FeePermanentDelete')->name('FeePermanentDelete');

Route::get('/student-list', 'StudentController@StudentsList')->name('StudentsList');
Route::get('/student-add', 'StudentController@StudentsAdd')->name('StudentsAdd');
Route::post('/student-store', 'StudentController@StudentStore')->name('StudentStore');
Route::get('/student-edit/{id}', 'StudentController@StudentEdit')->name('StudentEdit');

Route::get('/api/get-state-list/{id}', 'StudentController@GetState')->name('GetState');
Route::get('/api/get-city-list/{id}', 'StudentController@GetCity')->name('GetCity');
