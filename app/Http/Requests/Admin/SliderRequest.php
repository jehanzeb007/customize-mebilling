<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Set to true to authorize the request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'slug' => 'required|string|unique:sliders,slug', // Validation for slug
            'images' => 'required|array|min:1', // Ensure at least one image is uploaded
            'images.*' => 'mimes:jpeg,jpg,png,gif|max:2048', // Validate individual image file types and size
        ];
    }
}
