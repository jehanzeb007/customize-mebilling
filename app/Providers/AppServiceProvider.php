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
            $settings = Setting::whereIn('key', ['site_name', 'footer_text', 'logo', 'phone_no', 'email', 'address', 'meta_title', 'meta_description'])->get()->keyBy('key');
        } else {
            $setting = null;
        }

        $siteName = $settings['site_name']->value ?? 'Site Name'; // Default site name
        $siteEmail = $settings['email']->value ?? 'info@example.com'; // Default email
        $sitePhone = $settings['phone_no']->value ?? 'phone number';
        $siteAddress = $settings['address']->value ?? 'Address';
        $logoPath = $settings['logo']->value ?? 'logo';
        $footerText = $settings['footer_text']->value ?? 'Footer Text';
        $metaTitle = $settings['meta_title']->value ?? config('app.name'); // Default to app name
        $metaDescription = $settings['meta_description']->value ?? 'Default description for your application.';

        // Share globally
        View::share('siteName', $siteName);
        View::share('siteEmail', $siteEmail);
        View::share('sitePhone', $sitePhone);
        View::share('siteAddress', $siteAddress);
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
