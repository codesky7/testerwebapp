<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\client\ClientDashboardController;
use App\Http\Controllers\client\ClientProfileController;
use App\Http\Controllers\client\ClientProjectChatController;
use App\Http\Controllers\client\ClientProjectController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProjectChatController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\tester\TesterDashboardController;
use App\Http\Controllers\tester\TesterProfileController;
use App\Http\Controllers\tester\TesterProjectChatController;
use App\Http\Controllers\tester\TesterProjectController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontendController::class,'home'])->name('home');
Route::get('/sign-out', [AuthController::class, 'adminlogout'] )->name('adminlogout');
Route::get('checkout', [FrontendController::class,'checkout'])->name('checkout');
Route::get('session', [FrontendController::class,'session']);
Route::get('local/{lang}', [LocalController::class,'setLocal']);


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
    Route::get('/profile', [AdminDashboardController::class, 'adminprofile'])->name('admin.profile');
    Route::put('/profile/edit/{profileId}', [AdminDashboardController::class,'UpdateProfile'])->name('update.profile');
    Route::get('/projects', [ProjectController::class, 'adminproject'])->name('admin.projects');
    Route::get('/project/{id}', [ProjectController::class, 'showproject'])->name('admin.project');
    Route::delete('/project/destroy/{id}', [ProjectController::class, 'deleteproject'])->name('project.delete');
    Route::get('/new-project', [ProjectController::class, 'newproject'])->name('admin.newproject');
    Route::post('/new-project', [ProjectController::class, 'addproject']);
    Route::post('/project/{projectId}/send-message',[ProjectChatController::class,'sendMessage'])->name('send-message');
    

});

Route::group(['prefix' => 'client', 'middleware' => 'client'], function()
{
    Route::get('/dashboard', [ClientDashboardController::class, 'showdashboard'])->name('client.dashboard');
    Route::get('/sign-out', [AuthController::class, 'adminlogout'] )->name('clientlogout');
    Route::get('/profile', [ClientProfileController::class, 'clientprofile'])->name('client.profile');
    // Route::get('/profile/update', [AdminDashboardController::class,'UpdateProfile'])->name('update.profile');
    Route::get('/projects', [ClientProjectController::class, 'clientproject'])->name('client.projects');
    Route::get('/project/{id}', [ClientProjectController::class, 'showproject'])->name('client.project');
    Route::post('/new-project', [ProjectController::class, 'addproject']);
    Route::post('/project/{projectId}/send-messages',[ClientProjectChatController::class,'sendMessage'])->name('client.send-message');
    Route::get('checkout',[ClientProjectController::class,'checkView'])->name('client.checkoutView');
    Route::post('checkout',[ClientProjectController::class,'checkout'])->name('client.checkout');
    Route::get('help', [ClientDashboardController::class,'helpdesk'])->name('client.help');
    Route::get('plans', [ClientDashboardController::class,'plans'])->name('client.plans');

});

Route::group(['prefix' => 'tester', 'middleware' => 'tester'], function()
{
    Route::get('/dashboard', [TesterDashboardController::class, 'showdashboard'])->name('tester.dashboard');
    Route::get('/sign-out', [AuthController::class, 'testerlogout'] )->name('testerlogout');
    Route::get('/profile', [TesterProfileController::class, 'testerprofile'])->name('tester.profile');
    Route::get('/projects', [TesterProjectController::class, 'testerproject'])->name('tester.projects');
    Route::get('/project/{id}', [TesterProjectController::class, 'showproject'])->name('tester.project');
    Route::post('/project/{projectId}/send-message',[TesterProjectChatController::class,'sendMessage'])->name('tester.send-message');
});


Route::controller(PaymentController::class)->group(function(){
Route::get('stripe', 'stripe')->name('stripe.index');
Route::post('stripe/checkout','stripeCheckout')->name('stripe.checkout');
Route::get('stripe/checkout/success','successStripeCheckout')->name('success.checkout');

// Route::get('paypal', 'paypal')->name('paypal.index');
// Route::get('paypal/checkout','paypalCheckout')->name('paypal.checkout');
// Route::get('paypal/checkout/success','successPaypalCheckout')->name('success.checkout');

});

