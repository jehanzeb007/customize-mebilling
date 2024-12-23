<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;
use Illuminate\Http\Request;

use App\Models\Blog;
use Storage;

class BlogController extends Controller
{
    public function showBlogPage()
    {

        $blogs = Blog::paginate(5);

        $blogs->getCollection()->transform(function ($blog) {
            $blog->meta_description = json_decode($blog->meta_description, true);
            return $blog;
        });

        return view('dashboard.blogs.blog', compact('blogs'));
    }

    public function addBlog()
    {
        return view('dashboard.blogs.addblog');
    }

    public function blogCategory()
    {
        return view('dashboard.blogs.blogcategory');
    }



    public function store(BlogRequest $request)
    {

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('blogs', 'public')
            : null; // Default to null if no image is uploaded


//        $imagePath = $this->handleImageUpload($request);

        $metaDescription = json_encode([
            'title' => $request->input('meta.title'),
            'description' => $request->input('meta.description'),
        ]);

        $slug = generateUniqueSlug($request->name, Blog::class);

        Blog::create([
            'author_name' => $request->input('author_name'),
            'name' => $request->input('name'),
            'slug' => $slug,
            'description' => $request->input('description'),
            'meta_description' => $metaDescription,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.blog.blogpage')->with('success', 'Blog created successfully.');
    }



    private function handleImageUpload(BlogRequest $request): string
    {

        if ($request->hasFile('image')) {

            if ($request->oldImage) {
                $this->deleteOldImage($request->oldImage);
            }

            $image = $request->file('image');

            return $image->store('images/blogs', 'public');
        }

        return $request->oldImage ?? 'images/default-image.jpg';
    }


    public function edit($id)
    {

        $blog = Blog::findOrFail($id);

        $metaDescription = json_decode($blog->meta_description, true);

        return view('dashboard.blogs.addblog', [
            'blog' => $blog,
            'metaTitle' => $metaDescription['title'],
            'metaDescription' => $metaDescription['description'],
        ]);
    }

    public function update(BlogRequest $request, $id)
    {

        $blog = Blog::findOrFail($id);

        if ($request->has('slug')) {
            $slug = generateUniqueSlug($request->slug, Blog::class, $blog->id);
        }

        if ($request->hasFile('image')) {
            $imagePath = $this->handleImageUpload($request);
            $blog->image = $imagePath;
        } else {

            $blog->image = $request->oldImage ?? $blog->image;
        }

        $blog->name = $request->input('name');
        $blog->slug = $slug;
        $blog->description = $request->input('description');

        $metaDescription = json_decode($blog->meta_description, true);
        $blog->meta_description = json_encode([
            'title' => $request->input('meta.title', $metaDescription['title'] ?? ''),
            'description' => $request->input('meta.description', $metaDescription['description'] ?? ''),
        ]);

        $blog->save();

        return redirect()->route('admin.blog.blogpage')->with('success', 'Blog updated successfully');
    }


    private function deleteOldImage($imagePath)
    {

        if ($imagePath && file_exists(storage_path('app/public/' . $imagePath))) {
            unlink(storage_path('app/public/' . $imagePath));
        }
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        if ($blog) {
            $blog->delete();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }

}
