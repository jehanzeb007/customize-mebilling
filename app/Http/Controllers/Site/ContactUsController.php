<?php

namespace App\Http\Controllers\Site;

use App\Models\ContactUs;
use App\Mail\ContactUsEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Site\ContactUsRequest;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('sites.contact_us.index');
    }

    public function store(ContactUsRequest $request)
    {
        try {
            $data = ContactUs::create($request->validated());

            Mail::to(env('SUPPORT_EMAIL'))->send(new ContactUsEmail($data));
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
