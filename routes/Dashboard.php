<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\CMSController;
use App\Http\Controllers\SuperAdmin\FAQSController;
use App\Http\Controllers\SuperAdmin\BlogController;
use App\Http\Controllers\SuperAdmin\ImageUploadController;
use App\Http\Controllers\SuperAdmin\SettingController;

use App\Http\Controllers\SuperAdmin\SliderController;
use App\Http\Controllers\SuperAdmin\SlugskeywordsController;
use App\Http\Controllers\SuperAdmin\TestimonialsController;
use App\Http\Controllers\SuperAdmin\GeneralSectionsController;

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


    Route::prefix('faqs')->name('faqs.')->group(function() {
        Route::get('/', [FAQSController::class, 'index'])->name('index');
        Route::get('/add-faq', [FAQSController::class, 'addFaq'])->name('addFaq');
        Route::post('/store-faq/{id?}', [FAQSController::class, 'store'])->name('store');
        Route::get('/edit-faq/{id}', [FAQSController::class, 'addFaq'])->name('edit');
        Route::delete('/delete/{id}', [FAQSController::class, 'delete'])->name('delete');
        Route::post('/sorting', [FAQSController::class, 'sorting'])->name('sort');
    });

    // sections
    Route::prefix('section')->name('section.')->group(function() {
        Route::get('/', [GeneralSectionsController::class, 'index'])->name('index');
        Route::get('/add-section', [GeneralSectionsController::class, 'addSection'])->name('addSection');
        Route::post('/store-section', [GeneralSectionsController::class, 'store'])->name('store');
    });

    Route::prefix('media')->name('media.')->group(function () {
        Route::post('/upload/images', [ImageUploadController::class, 'upload'])->name('uploadimages');
    });
