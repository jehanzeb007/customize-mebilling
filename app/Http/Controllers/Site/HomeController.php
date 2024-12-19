<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $slider = Slider::where('slug' , 'home')->first();
        if ($slider && $slider->image_paths) {
            $data['sliders'] = json_decode($slider->image_paths, true);
        }

        $testimonials = Testimonial::paginate(10);

        $blogs = Blog::paginate(5);

        return view('sites.home.index', $data ,compact('testimonials','blogs'));

    }

}
