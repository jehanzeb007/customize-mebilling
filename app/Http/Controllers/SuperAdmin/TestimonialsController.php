<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialsRequest;
use Illuminate\Support\Facades\View;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Storage;

class TestimonialsController extends Controller
{

    public function addTestimonials($id = null)
{
    // If an id is passed, fetch the testimonial; otherwise, create a new one
    $testimonial = $id ? Testimonial::findOrFail($id) : new Testimonial();

    // Return the view and pass the testimonial object
    return view('dashboard.testimonials.add-testimonials', compact('testimonial'));
}



    public function showTestimonials()
    {
        $testimonials = Testimonial::paginate(10);

        return view('dashboard.testimonials.show-testimonials', compact('testimonials'));
    }



    public function store(TestimonialsRequest $request)
    {

        // Handle image upload (if image is provided)
        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('testimonials', 'public')
            : null; // Default to null if no image is uploaded


        // Handle image upload
//        $imagePath = $this->handleImageUpload($request); .. // Custom image upload method

        // Create the testimonial
        Testimonial::create([
            'name' => $request->name,
            'position' => $request->position,
            'testimonial' => $request->testimonial,
            'rating' => $request->rating,
            'image' => $imagePath,  // If an image is uploaded
        ]);

        return redirect()->route('admin.testimonials.showtestimonials')->with('success', 'Testimonial added successfully.');
    }

    // Handle image upload
    private function handleImageUpload(Request $request): string
    {
        if ($request->hasFile('image')) {
            // If there is an old image, delete it
            if ($request->oldImage) {
                $this->deleteOldImage($request->oldImage);
            }

            // Handle the new image upload
            $image = $request->file('image');

            // Store the image in the 'testimonials' directory within the public disk
            return $image->store('testimonials', 'public');
        }

        return $request->oldImage ?? 'images/default-image.jpg';
    }

    // Delete the old image if it exists
    private function deleteOldImage(string $oldImage)
    {

        if (file_exists(storage_path('app/public/' . $oldImage))) {
            unlink(storage_path('app/public/' . $oldImage));
        }
    }


    public function delete($id)
    {

        $testimonial = Testimonial::find($id);

        if (!$testimonial) {
            return response()->json(['success' => false, 'message' => 'Testimonial not found.'], 404);
        }

        $testimonial->delete();

        return response()->json(['success' => true, 'message' => 'Testimonial deleted successfully.']);
    }

    public function update(TestimonialsRequest $request, $id)
    {

        $testimonial = Testimonial::findOrFail($id);

        $testimonial->name = $request->input('name');
        $testimonial->testimonial = $request->input('testimonial');
        $testimonial->rating = $request->input('rating');

        // Handle image upload if it exists
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($testimonial->image) {
                Storage::delete('public/' . $testimonial->image);
            }

            // Upload the new image
            $path = $request->file('image')->store('testimonials', 'public');
            $testimonial->image = $path;
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials.showtestimonials')->with('success', 'Testimonial updated successfully!');
    }




    public function edit($id)
    {
        // Find the testimonial by ID
        $testimonial = Testimonial::findOrFail($id);

        // Pass the testimonial to the edit view
        return view('dashboard.testimonials.add-testimonials', compact('testimonial'));
    }




}
