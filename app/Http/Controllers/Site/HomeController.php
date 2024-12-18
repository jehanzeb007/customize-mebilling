<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
        return view('sites.home.index', $data);
    }
}
