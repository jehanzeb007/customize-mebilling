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
        $sections = GeneralSection::get();

        return view("dashboard.sections.index", compact('sections'));
    }

    public function addSection($id = null)
    {
        $data = [];

        if ($id) {
            $data['sections'] = GeneralSection::findOrFail($id);
        }
        return view('dashboard.sections.add-section', $data);
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
