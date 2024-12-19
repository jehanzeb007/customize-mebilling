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
    $currentSettings = Setting::where('type', '!=', 'contact setting')->get()->keyBy('data_key');
    $logoPath = $currentSettings['logo']->data_value ?? 'default-logo.png';  // Default logo if not found
    $footerText = $currentSettings['footer_text']->data_value ?? 'Default footer text';

    return view('dashboard.settings.setting-site-listing', compact('currentSettings', 'logoPath', 'footerText'));
}


    /**
     * Display the form for editing site settings.
     */
    public function showSettingPage()
    {
        $currentSettings = Setting::where('type', '!=', 'contact setting')->get()->keyBy('data_key');
        return view('dashboard.settings.site-settings-form', compact('currentSettings'));
    }

    /**
     * Display the form for editing contact settings.
     */
    public function showContactList()
    {
        $contactSettings = Setting::where('type', 'contact setting')->get()->keyBy('data_key');
        return view('dashboard.settings.contact-us-list', compact('contactSettings'));
    }

    public function showContactSettingPage()
    {
        $contactSettings = Setting::where('type', 'contact setting')->get()->keyBy('data_key');
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
                $data_value = empty($value) ? null : $value;
                Setting::updateOrCreate(
                    ['data_key' => $key, 'type' => 'site_setting'],
                    ['data_value' => $data_value]
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

            if (is_string($value) && $key !== '_token' && $key !== 'type') {
                Setting::updateOrCreate(
                    ['data_key' => $key, 'type' => 'contact setting'],
                    ['data_value' => $value]
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
            $logoSetting = Setting::where('data_key', 'logo')->first();

            if ($logoSetting && $logoSetting->data_value && Storage::exists('public/' . $logoSetting->data_value)) {
                Storage::delete('public/' . $logoSetting->data_value);
            }

            $logoPath = $request->file('logo')->store('logos', 'public');
            Setting::updateOrCreate(
                ['data_key' => 'logo'],
                ['data_value' => $logoPath, 'type' => 'site_setting']
            );
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['logo' => 'Failed to upload logo.']);
        }
    }
}
