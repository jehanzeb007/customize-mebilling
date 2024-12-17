<?php

use App\Http\Controllers\SuperAdmin\BlogController;
use App\Http\Controllers\SuperAdmin\ImageUploadController;
use App\Http\Controllers\SuperAdmin\SettingController;

use App\Http\Controllers\SuperAdmin\SliderController;
use App\Http\Controllers\SuperAdmin\SlugskeywordsController;
use App\Http\Controllers\SuperAdmin\TestimonialsController;
use Illuminate\Support\Facades\Route;

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

// BLOG

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'showBlogPage'])->name('blogpage');
    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
    Route::get('/blog-category', [BlogController::class, 'blogCategory'])->name('blog-category');
    Route::post('/store', [BlogController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [BlogController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [BlogController::class, 'destroy'])->name('destroy');

});

// SETTINGS

Route::prefix('settings')->name('settings.')->group(function () {

    //    routes for site settings
    Route::get('/', [SettingController::class, 'showSettingPageListing'])->name('settingpagelist');
    Route::get('/site-settings-form', [SettingController::class, 'showSettingPage'])->name('settingpage');
    Route::post('/settings/store', [SettingController::class, 'storeSetting'])->name('settings.store');

    // routes for contact settings
    Route::get('/contact-us-list', [SettingController::class, 'showContactList'])->name('contactlist');
    Route::get('/contact-settings-form', [SettingController::class, 'showContactSettingPage'])->name('contactsettings');
    Route::post('/contact-settings/store', [SettingController::class, 'storeSetting'])->name('contactsettings.store');
});

// SLUG AND KEYWORDS

Route::prefix('slugs-keywords')->name('slugs-keywords.')->group(function () {
    Route::get('/', [SlugskeywordsController::class, 'addSlugsKeywords'])->name('addslugscontent');
    Route::get('/contentlisting', [SlugskeywordsController::class, 'showSlugsKeywords'])->name('showslugscontent');
    Route::post('/store', [SlugskeywordsController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [SlugskeywordsController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [SlugskeywordsController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [SlugskeywordsController::class, 'delete'])->name('slugkeyword.delete');

});

// TESTIMONIALS

Route::prefix('testimonials')->name('testimonials.')->group(function () {
    Route::get('/add-testimonials', [TestimonialsController::class, 'addTestimonials'])->name('addtestimonials');
    Route::get('/show-testimonials', [TestimonialsController::class, 'showTestimonials'])->name('showtestimonials');
    Route::post('/store', [TestimonialsController::class, 'store'])->name('store');
    Route::put('/update/{id}', [TestimonialsController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TestimonialsController::class, 'delete'])->name('testimonial.delete');
    Route::get('/edit/{id}', [TestimonialsController::class, 'edit'])->name('edit');
});

// SLIDER

Route::prefix('slider')->name('slider.')->group(function () {
    Route::get('/add-slider', [SliderController::class, 'addSlider'])->name('addslider');
    Route::get('/show-slider', [SliderController::class, 'showSlider'])->name('showslider');
    Route::post('/add-slider', [SliderController::class, 'storeSlider'])->name('addslider.post');
    Route::put('/edit-slider/{id}', [SliderController::class, 'update'])->name('editslider.post');
    Route::get('/edit-slider/{id}', [SliderController::class, 'addSlider'])->name('editslider');
    Route::delete('/delete-slider/{id}', [SliderController::class, 'deleteSlider'])->name('slider.deleteslider');
    Route::delete('/delete-image/{id}', [SliderController::class, 'deleteImage'])->name('delete.image');
});


Route::prefix('media')->name('media.')->group(function () {
    Route::post('/upload/images', [ImageUploadController::class, 'upload'])->name('uploadimages');
});

