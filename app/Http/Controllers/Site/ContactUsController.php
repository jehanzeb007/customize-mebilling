<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Site\ContactUsRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('sites.contact_us.index');
    }

    public function store(ContactUsRequest $request)
    {
        try {
            $request->validated();
            ContactUs::create($request->validated());
            return response()->json(['success' => true,'message'=> 'Your response is submitted']);

        }
        catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 422);
        }
    }

    public function about_us()
    {
        $data = [];
        $data["heading"] = "About Us";
        $data["breadcrumb"] = "About Us";
        return view('sites.contact_us.about_us',$data);
    }


}
