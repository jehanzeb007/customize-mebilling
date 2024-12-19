<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [];
        $data["heading"] = "Blog";
        $data["breadcrumb"] = "blog";

        $blogs = Blog::paginate(3);

        return view("sites.blogs.index", $data,compact('blogs'));
    }
}
