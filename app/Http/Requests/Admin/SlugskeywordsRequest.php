<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SlugskeywordsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        // Set this to true to allow all users to make this request
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
            'slug' => 'required|string|max:255|unique:slugskeywords,slug',  
            'description' => 'nullable|string',
            
        ];
    }

    /**
     * Get the custom messages for the validation errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'slug.required' => 'The slug field is required.',
            'slug.string' => 'The slug must be a valid string.',
            'slug.max' => 'The slug may not be greater than 255 characters.',
            'slug.unique' => 'The slug has already been taken.',
            'description.string' => 'The description must be a valid string.',
        ];
    }
}
