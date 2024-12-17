<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;


class BlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'meta.title' => 'nullable|string|max:255',
            'meta.description' => 'nullable|string|max:5000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The title is required.',
            'name.max' => 'The title cannot exceed 255 characters.',
            'slug.required' => 'A unique slug is required.',
            'slug.unique' => 'The slug has already been taken. Please choose another one.',
            'description.required' => 'The description cannot be empty.',
            'meta_description.max' => 'The meta description cannot exceed 500 characters.',
            'image.image' => 'Please upload a valid image file (jpeg, png, jpg, gif, svg).',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image size cannot exceed 2MB.',
        ];
    }
}

