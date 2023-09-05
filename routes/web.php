<?php

use App\Exports\UsersExport;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\MakeInvestmentController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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
//----

Route::get('/', [FrontendController::class, 'index'])->name('index');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Investor Dashbaord

Route::group(['as'=> 'invest.','prefix'=>'investor','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Investor'], function () {
    Route::get('/dashboard', ['as' => 'make','uses' => 'InvestorController@dashbaord']);
});
//basic change
Route::group(['middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers'], function () {
    Route::get('manage-users', [FrontendController::class, 'manageusers'])->name('manageusers');
    Route::get('manage-users/delete/{id}', [FrontendController::class, 'delete_user'])->name('delete_user.manage');
    Route::get('manage-users/edit/{id}', [FrontendController::class, 'edit_user'])->name('edit_user.manage');
    Route::post('manage-users/update', [FrontendController::class, 'update_user'])->name('update_user.manage');
    Route::post('addUser', [FrontendController::class, 'addUser'])->name('addUser');
    Route::get('manage-properties', [FrontendController::class, 'manage_properties'])->name('manage.properties');
    Route::get('import-properties', [FrontendController::class, 'import_properties'])->name('import.properties');
    Route::get('review-properties', [FrontendController::class, 'review_properties'])->name('review.properties');
    Route::get('counties', [FrontendController::class, 'counties'])->name('counties');
    Route::get('/counties/edit/{id}', [FrontendController::class, 'counties_edit'])->name('counties.edit');
    Route::post('/counties/update', [FrontendController::class, 'counties_update'])->name('counties.update');
    Route::get('/counties/delete/{id}', [FrontendController::class, 'counties_delete'])->name('counties.delete');
    Route::post('add-counties', [FrontendController::class, 'add_counties'])->name('add.counties');
    Route::get('propmix', [FrontendController::class, 'propmix'])->name('propmix');
    Route::get('fetch_property', [FrontendController::class, 'fetch_property'])->name('fetch_property');

});

Route::group(['middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers'], function () {
    Route::post('import-properties-via-excel', [FrontendController::class, 'import_properties_excel'])->name('import.properties.via.excel');
});



Route::get('login', function () {
    return view('auth.login');
});

Route::get('db2', function () {
    return view('layouts.dashboard-issuer');
});



Route::group(['as'=> 'organizations.','prefix' => 'organizations','middleware' => ['auth','verified'],'namespace'=>'App\Http\Controllers\Organizations'], function () {
    Route::get('listing', ['as' => 'index','uses' => 'OrganizationsController@index']);
    Route::post('create', ['as' => 'create','uses' => 'OrganizationsController@create']);
   // Route::get('list', ['as' => 'list','uses' => 'OfferController@list']);
    Route::post('update', ['as' => 'update','uses' => 'OrganizationsController@update']);
    Route::post('delete', ['as' => 'delete','uses' => 'OrganizationsController@delete']);
});


//Latest In code

require __DIR__.'/auth.php';
