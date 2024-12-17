<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('sites.home.index');
    }

    public function revenue()
    {
        return view('sites.our_services.revenu-optimzation');
    }
}
