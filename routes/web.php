<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\FeedbackController;

Route::get('/signup', [AccountController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AccountController::class, 'signup']);

Route::get('/login', [AccountController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AccountController::class, 'login']);

Route::middleware(['auth', 'check.user'])->group(function () {
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
    Route::get('/news', function () {
        return view('user.news');
    })->name('news');
    Route::get('/FAQ', [FeedbackController::class, 'showFaqForm'])->name('faq');
    Route::post('/FAQ', [FeedbackController::class, 'storeFeedback']);

});

Route::middleware(['auth', 'check.admin'])->group(function () {
    Route::get('/admin/news', function () {
        return view('admin.news');
    })->name('adminNews');
    Route::get('/admin/community', function () {
        return view('admin.community');
    })->name('adminCommunity');
    Route::get('/admin', [FeedbackController::class, 'showFeedbacks'])->name('adminDashboard');
});

Route::post('/logout', [AccountController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('main.welcome');
})->name('welcome');
