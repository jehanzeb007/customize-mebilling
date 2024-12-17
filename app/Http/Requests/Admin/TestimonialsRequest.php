<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialsRequest extends FormRequest
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
        'name' => 'required|string|max:255',
        'testimonial' => 'required|string',  
        'rating' => 'required|integer|min:1|max:5',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ];
}

public function messages()
{
    return [
        'name.required' => 'Name is required.',
        'testimonial.required' => 'Testimonial content is required.', 
        'rating.required' => 'Rating is required.',
        'rating.integer' => 'Rating must be a number between 1 and 5.',
        'image.image' => 'The uploaded file must be an image.',
    ];
}

}
