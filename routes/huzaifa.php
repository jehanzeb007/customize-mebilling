<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\ContactUsController;

Route::prefix('services')->name('services.')->group(function() {
Route::get('/revenu_optimzation', [ServiceController::class, 'revenu_optimzation'])->name('revenu_optimzation');
Route::get('/revenue_cycle_management', [ServiceController::class, 'revenue_cycle_management'])->name('revenue_cycle_management');
Route::get('/medical_billing_coding', [ServiceController::class, 'medical_billing_coding'])->name('medical_billing_coding');
Route::get('/medical_coding', [ServiceController::class, 'medical_coding'])->name('medical_coding');
Route::get('/medical_pratice_analytics', [ServiceController::class, 'medical_pratice_analytics'])->name('medical_pratice_analytics');
Route::get('/credentialing_contracting', [ServiceController::class, 'credentialing_contracting'])->name('credentialing_contracting');
});
Route::get('/specialties', [ServiceController::class, 'specialties'])->name('specialties');

Route::get('/about_us', [ContactUsController::class, 'about_us']);

?>


