<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display the site settings listing page (exclude contact settings).
     */
    public function showSettingPageListing()
{
    $currentSettings = Setting::where('type', '!=', 'contact setting')->get()->keyBy('key');
    $logoPath = $currentSettings['logo']->value ?? 'default-logo.png';  // Default logo if not found
    $footerText = $currentSettings['footer_text']->value ?? 'Default footer text';

    return view('dashboard.settings.setting-site-listing', compact('currentSettings', 'logoPath', 'footerText'));
}


    /**
     * Display the form for editing site settings.
     */
    public function showSettingPage()
    {
        $currentSettings = Setting::where('type', '!=', 'contact setting')->get()->keyBy('key');
        return view('dashboard.settings.site-settings-form', compact('currentSettings'));
    }

    /**
     * Display the form for editing contact settings.
     */
    public function showContactList()
    {
        $contactSettings = Setting::where('type', 'contact setting')->get()->keyBy('key');
        return view('dashboard.settings.contact-us-list', compact('contactSettings'));
    }

    public function showContactSettingPage()
    {
        $contactSettings = Setting::where('type', 'contact setting')->get()->keyBy('key');
        return view('dashboard.settings.contact-us-setting', compact('contactSettings'));
    }

    /**
     * Store or update settings.
     */
    public function storeSetting(SettingRequest $request)
{

    if ($request->input('type') === 'site_setting') {
        $this->handleSiteSettings($request);


        return redirect()->route('admin.settings.settingpagelist')->with('success', 'Site settings updated successfully.');
    }


    if ($request->input('type') === 'contact_setting') {
        $this->handleContactSettings($request);


        return redirect()->route('admin.settings.contactlist')->with('success', 'Contact settings updated successfully.');
    }


    return redirect()->route('admin.settings.settingpagelist')->with('error', 'Invalid setting type.');
}


    /**
     * Handle site settings update.
     */
    private function handleSiteSettings($request)
    {
        foreach ($request->all() as $key => $value) {

            if ($key !== 'type' && $key !== '_token' && $key !== 'logo') {
                $value = empty($value) ? null : $value;
                Setting::updateOrCreate(
                    ['key' => $key, 'type' => 'site_setting'],
                    ['value' => $value]
                );
            }
        }

        // Handle the logo file upload separately
        if ($request->hasFile('logo')) {
            $this->handleLogoUpload($request);
        }
    }

    /**
     * Handle contact settings update.
     */
    private function handleContactSettings($request)
    {

        $inputFields = $request->all();

        foreach ($inputFields as $key => $value) {

            if ($key !== '_token' && $key !== 'type') {
                Setting::updateOrCreate(
                    ['key' => $key, 'type' => 'contact setting'],
                    ['value' => $value]
                );
            }
        }
    }


    /**
     * Handle logo file upload for site settings.
     */
    private function handleLogoUpload($request)
    {
        try {
            $logoSetting = Setting::where('key', 'logo')->first();

            if ($logoSetting && $logoSetting->value && Storage::exists('public/' . $logoSetting->value)) {
                Storage::delete('public/' . $logoSetting->value);
            }

            $logoPath = $request->file('logo')->store('logos', 'public');
            Setting::updateOrCreate(
                ['key' => 'logo'],
                ['value' => $logoPath, 'type' => 'site_setting']
            );
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['logo' => 'Failed to upload logo.']);
        }
    }
}
