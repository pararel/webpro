<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;

Route::get('/signup', [AccountController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AccountController::class, 'signup']);
Route::get('/login', [AccountController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AccountController::class, 'login']);
Route::middleware('auth')->group(function () {
    Route::middleware('check.user')->group(function () {
        Route::get('/dashboard', function () {
            return view('user.dashboard');
        })->name('dashboard');
        Route::get('/history', function () {
            return view('user.history');
        })->name('history');
        Route::get('/target', function () {
            return view('user.target');
        })->name('target');
        Route::get('/community', function () {
            return view('user.community');
        })->name('community');
        Route::get('/news', [NewsController::class, 'showUserNews'])->name('news');
        Route::get('/FAQ', [FeedbackController::class, 'showFaqForm'])->name('faq');
        Route::post('/FAQ', [FeedbackController::class, 'storeFeedback']);
        Route::get('/settings', [AccountController::class, 'showSettingsForm'])->name('settings');
    });
    Route::middleware('check.admin')->group(function () {
        Route::get('/admin/community', function () {
            return view('admin.community');
        })->name('adminCommunity');
        Route::get('/admin', [FeedbackController::class, 'showFeedbacks'])->name('adminDashboard');
        Route::get('/admin/news', [NewsController::class, 'showAdminNews'])->name('adminNews');
        Route::post('/admin/news', [NewsController::class, 'storeNews']);
        Route::delete('/admin/news/{id}', [NewsController::class, 'destroy'])->name('adminNewsDelete');
        Route::get('/admin/settings', [AccountController::class, 'showAdminSettingsForm'])->name('adminSettings');
    });
    Route::post('/logout', [AccountController::class, 'logout'])->name('logout');
    Route::post('/updateProfile', [AccountController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/updatePassword', [AccountController::class, 'updatePassword'])->name('updatePassword');
});
Route::get('/', function () {
    return view('main.welcome');
})->name('welcome');


Route::middleware(['auth'])->group(function () {
    Route::get('/settings', [AccountController::class, 'showSettingsForm'])->name('settings');
    Route::post('/settings/updateProfile', [AccountController::class, 'updateProfile'])->name('settings.updateProfile');
    Route::post('/settings/updatePassword', [AccountController::class, 'updatePassword'])->name('settings.updatePassword');
});
