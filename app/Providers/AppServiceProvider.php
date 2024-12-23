<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fetch settings for site name, meta title, description, footer text, and logo

        \Schema::defaultStringLength(191);
        if (\Schema::hasTable('settings')) {
            $settings = Setting::whereIn('key', ['site_name', 'footer_text', 'logo', 'meta_title', 'meta_description'])->get()->keyBy('key');
        } else {
            $setting = null;
        }

        $siteName = $settings['site_name']->value ?? 'Site Name'; // Default site name
        $footerText = $settings['footer_text']->value ?? 'Footer Text';
        $logoPath = $settings['logo']->value ?? 'logo';
        $metaTitle = $settings['meta_title']->value ?? config('app.name'); // Default to app name
        $metaDescription = $settings['meta_description']->value ?? 'Default description for your application.';

        // Share globally
        View::share('siteName', $siteName);
        View::share('footerText', $footerText);
        View::share('logoPath', $logoPath);
        View::share('metaTitle', $metaTitle);
        View::share('metaDescription', $metaDescription);
    }




    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
