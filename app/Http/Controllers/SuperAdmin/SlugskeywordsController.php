<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SlugskeywordsRequest;
use App\Models\Slugskeywords;
use Illuminate\Support\Str;


class SlugskeywordsController extends Controller
{
    public function addSlugsKeywords()
    {
        return view('dashboard.slugskeywords.add-content');
    }

    public function showSlugsKeywords()
    {
        // Fetch all slug keywords, optionally with pagination
        $slugKeywords = SlugsKeywords::paginate(10);

        
        return view('dashboard.slugskeywords.content-listing', compact('slugKeywords'));
    }



    public function store(SlugskeywordsRequest $request)
    {
        Slugskeywords::create([
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
        ]);

        return redirect()->route('admin.slugs-keywords.showslugscontent')->with('success', 'Content added successfully!');
    }
    public function delete($id)
    {
        try {
            $slugKeyword = Slugskeywords::find($id);

            if (!$slugKeyword) {
                return response()->json(['success' => false, 'message' => 'Record not found']);
            }

            $slugKeyword->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            \Log::error('Error deleting record with ID ' . $id . ': ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'There was an issue deleting the record: ' . $e->getMessage()]);
        }
    }
    public function edit($id)
    {
        // Fetch the slug keyword
        $slugKeyword = SlugsKeywords::findOrFail($id);

        
        return view('dashboard.slugskeywords.add-content', compact('slugKeyword'));
    }



    public function update(SlugskeywordsRequest $request, $id)
{
    // Find the record by ID
$request->validated();

    $slugKeyword = SlugsKeywords::findOrFail($id);

    // Update the slug and description
    $slugKeyword->slug = Str::slug($request->input('slug'));  // Optionally slugify the slug
    $slugKeyword->description = $request->input('description'); // Update the description

    // Save the updated record
    $slugKeyword->save();

    // Redirect to the content listing page with a success message
    return redirect()->route('admin.slugs-keywords.showslugscontent')
        ->with('success', 'Blog updated successfully');
}





}
