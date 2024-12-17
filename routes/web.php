<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Site\ContactUsController;
use App\Http\Controllers\SuperAdmin\ImageUploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\BillingController;
use App\Http\Controllers\Site\BlogController as SiteBlogController;


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

require __DIR__ . '/auth.php';



Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    require __DIR__ . '/abdullah.php';
    require __DIR__ . '/wahab.php';
});

Route::get('/', [HomeController::class,'index'])->name('home');

Route::prefix('contact-us')->name('contact-us.')->group(function() {
    Route::get('/', [ContactUsController::class, 'index'])->name('index');
    Route::post('/store', [ContactUsController::class, 'store'])->name('store');
});

// user sites
// billing
Route::prefix('billing-solutions')->name('billing.')->group(function () {
    Route::get('/physician-billing', [BillingController::class,'physicianBilling'])->name('physician');
    Route::get('/emergency-room', [BillingController::class,'emergencyRoom'])->name('emergencyRoom');
    Route::get('/urgent-care', [BillingController::class,'urgentCare'])->name('urgentCare');
    Route::get('/laboratory', [BillingController::class,'laboratory'])->name('laboratory');
    Route::get('/surgical-center', [BillingController::class,'surgicalCenter'])->name('surgicalCenter');
    Route::get('/micro-hospitals', [BillingController::class,'microHospitals'])->name('microHospitals');
});

// blogs
Route::prefix('blog')->name('blog.')->group(function() {
    Route::get('/', [SiteBlogController::class, 'index'])->name('index');
});

require __DIR__ . '/huzaifa.php';
