<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [];
        $data["heading"] = "Blog";
        $data["breadcrumb"] = "blog";
        return view("sites.blogs.index", $data);
    }
}
