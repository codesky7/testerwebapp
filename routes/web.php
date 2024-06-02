<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\client\ClientDashboardController;
use App\Http\Controllers\client\ClientProfileController;
use App\Http\Controllers\client\ClientProjectController;
use App\Http\Controllers\ProjectChatController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\tester\TesterDashboardController;
use App\Http\Controllers\tester\TesterProfileController;
use App\Http\Controllers\tester\TesterProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});





Route::group(['middleware' => 'guest'], function()
{
    Route::get('/sign-up', [AuthController::class, 'registrationview'] )->name('registration');
Route::post('/sign-up', [AuthController::class, 'registration'] );
Route::get('/sign-in', [AuthController::class, 'loginview'] )->name('login');
Route::post('/sign-in', [AuthController::class, 'login'] );
});

// Route::group([ 'prefix' => 'admin', 'middleware' => 'admin'], function()
// {
//  Route::get('/sign-in', [AuthController::class, 'loginview'] )->name('login');
// Route::post('/sign-in', [AuthController::class, 'login'] );
// Route::get('/dashboard', [AuthController::class, 'showdashboard'])->name('admin.dashboard');
// }
// );



Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    Route::get('/dashboard', [AdminDashboardController::class, 'showdashboard'])->name('admin.dashboard');
    Route::get('/sign-out', [AuthController::class, 'adminlogout'] )->name('adminlogout');
    Route::get('/profile', [AdminDashboardController::class, 'adminprofile'])->name('admin.profile');
    Route::get('/projects', [ProjectController::class, 'adminproject'])->name('admin.projects');
    Route::get('/project/{id}', [ProjectController::class, 'showproject'])->name('admin.project');
    Route::get('/new-project', [ProjectController::class, 'newproject'])->name('admin.newproject');
    Route::post('/new-project', [ProjectController::class, 'addproject']);
    Route::post('/project/{projectId}/send-message',[ProjectChatController::class,'sendMessage'])->name('send-message');

});

Route::group(['prefix' => 'client', 'middleware' => 'client'], function()
{
    Route::get('/dashboard', [ClientDashboardController::class, 'showdashboard'])->name('client.dashboard');
    Route::get('/sign-out', [AuthController::class, 'adminlogout'] )->name('clientlogout');
    Route::get('/profile', [ClientProfileController::class, 'clientprofile'])->name('client.profile');
    Route::get('/projects', [ClientProjectController::class, 'clientproject'])->name('client.projects');
    Route::get('/project/{id}', [ProjectController::class, 'showproject'])->name('client.project');
});

Route::group(['prefix' => 'tester', 'middleware' => 'tester'], function()
{
    Route::get('/dashboard', [TesterDashboardController::class, 'showdashboard'])->name('tester.dashboard');
    Route::get('/sign-out', [AuthController::class, 'testerlogout'] )->name('testerlogout');
    Route::get('/profile', [TesterProfileController::class, 'testerprofile'])->name('tester.profile');
    Route::get('/projects', [TesterProjectController::class, 'testerproject'])->name('tester.projects');
    Route::get('/project/{id}', [ProjectController::class, 'showproject'])->name('tester.project');
});