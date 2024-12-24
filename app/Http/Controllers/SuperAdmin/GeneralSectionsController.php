<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Models\GeneralSection;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SectionRequest;

class GeneralSectionsController extends Controller
{
    public function index()
    {
        $sections = GeneralSection::all();
        dd  ($sections);
        return view("dashboard.sections.index");
    }

    public function addSection()
    {
        return view("dashboard.sections.add-section");
    }

    public function store(SectionRequest $request)
    {
        try {

            $section = GeneralSection::create($request->all());
            return view('dashboard.sections.index');
        }catch(Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
