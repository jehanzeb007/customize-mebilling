<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
        ];
        if ($this->input('type') === 'site_setting') {
            return [
                'site_name' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'noIndexFollow' => 'nullable|in:noIndexFollow,indexFollow',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'footer_text' => 'nullable|string|max:500',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', // 2MB max
            ];
    
    }
    if ($this->input('type') === 'contact_setting') {
        return [
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'description' => 'required|string|max:500',
            'address' => 'required|string|max:255',
            'phone_no' => 'required|string|max:15',
            'email' => 'required|string|email',
        ];
    }

    
}
    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'site_name.required' => 'The site name is required.',
            'noIndexFollow.required' => 'Please select whether to index or follow.',
            'logo.image' => 'The logo must be an image.',
        ];
    }
}
