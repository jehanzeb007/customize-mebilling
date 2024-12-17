<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageUploadController extends Controller
{
    

    public function upload(Request $request)
{
    // Validate the file
    $request->validate([
        'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('upload')) {
        $file = $request->file('upload');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');

        return response()->json([
            'uploaded' => true,
            'url' => asset('storage/' . $filePath), // URL to the uploaded file
        ]);
    }

    return response()->json([
        'uploaded' => false,
        'error' => ['message' => 'File upload failed.'],
    ], 400);
}



}
