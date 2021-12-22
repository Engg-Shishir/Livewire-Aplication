<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Users\ListUser;
use App\Http\Livewire\Admin\Appoinments\ListAppoinments;
use App\Http\Livewire\Admin\Appoinments\CreateAppoinmentsForm;

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
    return view('welcome.welcome');
});


Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
Route::get('admin/users', ListUser::class)->name('admin.users');
Route::get('admin/appoinments', ListAppoinments::class)->name('admin.appoinments');
Route::get('admin/appoinments/create', CreateAppoinmentsForm::class)->name('admin.appoinments.create');