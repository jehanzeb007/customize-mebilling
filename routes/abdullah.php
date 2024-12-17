<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\CMSController;
use App\Http\Controllers\SuperAdmin\FAQSController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('profile')->name('profile.')->group(function() {
        Route::get('/', [UserController::class, 'index'])->name('index');
        ROute::post('/update',[UserController::class, 'updateProfile'])->name('update');
    });

    Route::prefix('cms')->name('cms.')->group(function () {
        Route::get('/', [CMSController::class, 'index'])->name('index');
        Route::get('/add-content', [CMSController::class, 'addContent'])->name('addContent');
        Route::post('/create-content/{id?}', [CMSController::class, 'store'])->name('store');
        Route::get('/edit-content/{id}', [CMSController::class, 'addContent'])->name('editContent');
        Route::get('/delete/{id}', [CMSController::class, 'delete'])->name('delete');
    });

    Route::prefix('faqs')->name('faqs.')->group(function() {
        Route::get('/', [FAQSController::class, 'index'])->name('index');
        Route::get('/add-faq', [FAQSController::class, 'addFaq'])->name('addFaq');
        Route::post('/store-faq/{id?}', [FAQSController::class, 'store'])->name('store');
        Route::get('/edit-faq/{id}', [FAQSController::class, 'addFaq'])->name('edit');
        Route::delete('/delete/{id}', [FAQSController::class, 'delete'])->name('delete');
        Route::post('/sorting', [FAQSController::class, 'sorting'])->name('sort');
    });
