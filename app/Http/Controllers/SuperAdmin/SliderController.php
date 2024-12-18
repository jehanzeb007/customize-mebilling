<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function addSlider($id = null)
    {
        $slider = null;
        if ($id) {
            $slider = Slider::findOrFail($id);
            if ($slider && $slider->image_paths) {
                $slider->image_paths = json_decode($slider->image_paths, true);
            }
        }
        return view('dashboard.slider.add-slider-content', compact('slider'));
    }




    public function storeSlider(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:sliders,slug',
            'images.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        // Create slider
        $slider = Slider::create([
            'slug' => $request->slug
        ]);

        // Store images
        $imagePaths = $this->handleImageUpload($request, $slider->id);

        // Update slider with image paths
        $slider->update([
            'image_paths' => json_encode($imagePaths)
        ]);

        return redirect()->route('admin.slider.showslider')->with('success', 'Slider created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'slug' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $slider = Slider::findOrFail($id);

        // Get existing images
        $existingImages = $request->uploaded_images ?? [];

        // Determine images to delete
        $imagesToDelete = $request->deleted_images??[];

        // Delete images not in the submitted list
        foreach ($imagesToDelete as $deletedImagePath) {
            if (Storage::disk('public')->exists($deletedImagePath)) {
                Storage::disk('public')->delete($deletedImagePath);
            }
        }

        // Upload new images
        $newImagePaths = $this->handleImageUpload($request, $slider->id);


        // Merge existing submitted images with new uploads
        $finalImagePaths = array_merge($existingImages, $newImagePaths);

        // Update slider
        $slider->update([
            'slug' => $request->slug,
            'image_paths' => json_encode($finalImagePaths)
        ]);

        return redirect()->route('admin.slider.showslider')->with('success', 'Slider updated successfully!');
    }



    private function handleImageUpload(Request $request, $sliderId)
    {
        $imagePaths = [];

        if ($request->hasFile('images')) {
            $folderPath = 'slider/id-' . $sliderId;

            foreach ($request->file('images') as $image) {
                $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs($folderPath, $imageName, 'public');
                $imagePaths[] = $imagePath;
            }
        }

        return $imagePaths;
    }

    public function deleteSlider($id)
    {
        $slider = Slider::findOrFail($id);

        // Delete associated images
        $imagePaths = json_decode($slider->image_paths, true) ?? [];
        foreach ($imagePaths as $imagePath) {
            if (Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
        }

        // Delete slider folder
        $folderPath = 'slider/id-' . $slider->id;
        if (Storage::disk('public')->exists($folderPath)) {
            Storage::disk('public')->deleteDirectory($folderPath);
        }

        // Delete slider record
        $slider->delete();

        return response()->json(['success' => true, 'message' => 'Slider deleted successfully']);
    }

    public function deleteImage(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $imageToDelete = $request->input('image_url');

        $images = json_decode($slider->image_paths, true) ?? [];

        // Remove the image from the array
        $images = array_filter($images, function($image) use ($imageToDelete) {
            return $image !== $imageToDelete;
        });

        // Delete the actual image file
        if (Storage::disk('public')->exists($imageToDelete)) {
            Storage::disk('public')->delete($imageToDelete);
        }

        // Update slider with new image paths
        $slider->update([
            'image_paths' => json_encode(array_values($images))
        ]);

        return response()->json(['success' => true, 'message' => 'Image deleted successfully']);
    }

    public function showSlider()
    {
        $sliders = Slider::paginate(10);
        return view('dashboard.slider.show-slider-content', compact('sliders'));
    }
}
