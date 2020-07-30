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

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();

//Route::post('/excelUpload','HomeController@excelUpload')->name('excelUpload');
Route::post('/excelUpload','HomeController@excelUpload')->name('home');


Route::get('/DataInputs','HomeController@showForm');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/loginDetails', 'GetJsDataController');
//Route::get('/loginDetails', 'GetJsDataController@index');
//Route::resource('books', 'UserCurdOperation');

//EUC datareview
Route::view('/DataReview','DataReview')->name('DataReview');
//Route::get('/DataReview','UserCurdOperation@index1')->name('DataReview');


//crud application route
Route::get('/','EmployeesController@index');
Route::get('/books','UserCurdOperation@index1');
//below route is used for AJAX request.
Route::get('/employees/getEmployees/','EmployeesController@getEmployees')->name('employees.getEmployees');

//crud 2
Route::resource('sample', 'SampleController');

Route::post('sample/update', 'SampleController@update')->name('sample.update');

Route::get('sample/destroy/{id}', 'SampleController@destroy');

//Route::get('/online', 'OnlineSurveyController@index');
Route::resource('online','OnlineSurveyController');







