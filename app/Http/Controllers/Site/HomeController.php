<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $testimonials = Testimonial::paginate(10);
        return view('sites.home.index', compact('testimonials'));
    }



    public function revenue()
    {
        return view('sites.our_services.revenu-optimzation');
    }

}
