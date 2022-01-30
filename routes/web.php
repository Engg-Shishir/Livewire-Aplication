<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Users\ListUser;
use App\Http\Livewire\Admin\Appoinments\ListAppoinments;
use App\Http\Livewire\Admin\Appoinments\CreateAppoinmentsForm;
use App\Http\Livewire\Admin\Appoinments\UpdateAppoinmentsForm;
use App\Http\Livewire\Admin\Profile\Profile;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ErrorController;

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

// This middleware permit this route access only authenticated users
// here admin is middleware name, which is defined in kernal.php file
Route::middleware(['auth','admin'])->group(function (){
    Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::get('admin/users', ListUser::class)->name('admin.users');
    Route::get('admin/appoinments', ListAppoinments::class)->name('admin.appoinments');
    Route::get('admin/appoinments/create', CreateAppoinmentsForm::class)->name('admin.appoinments.create');
    Route::get('admin/appoinment/{PassAppoinment}/edit', UpdateAppoinmentsForm::class)->name('admin.appoinments.edit');


    Route::get('admin/profile', [DashboardController::class,'profile'])->name('admin.profile');

}); 







Route::get('error', [ErrorController::class, 'errors'])->name('error');





Route::post('upload',[UploadController::class, 'store']);
Route::delete('upload/revert',[UploadController::class, 'ok']);


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
});