<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
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

//Route::get('/', function () {
   // return view('welcome');
//});

// client
Route::get('/' , [ClientController::class, 'home']);
Route::get('/advance' , [ClientController::class, 'advance']);
Route::get('/jobcompany' , [ClientController::class, 'jobcompany']);
Route::get('/jobfunction' , [ClientController::class, 'jobfunction']);
Route::get('/jobtitle' , [ClientController::class, 'jobtitle']);
Route::get('/jobbycategory' , [ClientController::class, 'jobbycategory']);
Route::get('/companies' , [ClientController::class, 'companies']);
Route::get('/hiring' , [ClientController::class, 'hiring']);
Route::get('/aboutus' , [ClientController::class, 'aboutus']);
Route::get('/contact' , [ClientController::class, 'contact']);
Route::get('/submitapp' , [ClientController::class, 'submitapp']);
Route::get('/hiringcompany' , [ClientController::class, 'hiringcompany']);
Route::get('/hiringdetails' , [ClientController::class, 'hiringdetails']);
Route::get('/register' , [ClientController::class, 'register']);
Route::get('/profile' , [ClientController::class, 'profile']);
Route::get('/profile/message' , [ClientController::class, 'message']);
Route::get('/profile/readmessage' , [ClientController::class, 'readmessage']);
Route::get('/profile/jopapplied' , [ClientController::class, 'jopapplied']);


// admin
Route::get('/admin/dashboard' , [AdminController::class, 'dashboard']);
Route::get('/admin/companies' , [AdminController::class, 'companies']);
Route::get('/admin/vacancies' , [AdminController::class, 'vacancies']);
Route::get('/admin/employee' , [AdminController::class, 'employee']);
Route::get('/admin/applicants' , [AdminController::class, 'applicants']);
Route::get('/admin/categories' , [AdminController::class, 'categories']);
Route::get('/admin/users' , [AdminController::class, 'users']);
Route::get('/admin/addcompany' , [AdminController::class, 'addcompany']);
Route::get('/admin/addvacancy' , [AdminController::class, 'addvacancy']);
Route::get('/admin/addemployee' , [AdminController::class, 'addemployee']);
Route::get('/admin/addcategory' , [AdminController::class, 'addcategory']);
Route::get('/admin/adduser' , [AdminController::class, 'adduser']);
Route::get('/admin/userprofile' , [AdminController::class, 'userprofile']);
// company
Route::POST('/admin/savecompany' , [AdminController::class, 'savecompany']);
Route::get('/admin/deletecompany/{id}' , [AdminController::class, 'deletecompany']);
Route::get('/admin/editcompany/{id}' , [AdminController::class, 'editcompany']);
Route::post('/admin/updatecompany' , [AdminController::class, 'updatecompany']);

//employee
Route::post('/admin/saveemployee' , [AdminController::class, 'saveemployee']);


// categories
Route::post('/admin/savecategory' , [AdminController::class, 'savecategory']);
Route::get('/admin/deletecategory/{id}' , [AdminController::class, 'deletecategory']);
Route::get('/admin/editcategory/{id}' , [AdminController::class, 'editcategory']);
Route::post('/admin/updatecategory' , [AdminController::class, 'updatecategory']);


// vacancy
Route::post('/admin/savevacancy' , [AdminController::class, 'savevacancy']);
Route::get('/admin/deletevacancy/{id}' , [AdminController::class, 'deletevacancy']);
Route::get('/admin/editvacancy/{id}' , [AdminController::class, 'editvacancy']);
Route::post('/admin/updatevacancy' , [AdminController::class, 'updatevacancy']);