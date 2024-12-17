<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FaqsRequest;
use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQSController extends Controller
{
    public function index()
    {
        $data = [];
        $data['title'] = 'FAQs';
        $data['faqs'] = FAQ::orderBy('sort_order')->get();
        return view('dashboard.faqs.index', $data);
    }

    public function addFaq($id = null)
    {
        $data = [];
        $data['title'] = 'FAQs';
        $data['breadcrumbs'] = $id ? 'Edit FAQ' : 'Add FAQ';

        $data['faqs'] = $id ? FAQ::findOrFail($id) : new FAQ();

        return view('dashboard.faqs.add-faq', $data);
    }

    public function store(FaqsRequest $request, $id = null)
    {
        $request->validated();

        $faq = FAQ::updateOrCreate(
            ['id' => $id],
            [
            'question' => $request->question,
            'answer' => $request->answer,]
        );

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ added successfully');
    }

    public function delete($id)
    {
        try {
            $faq = FAQ::findOrFail($id);
            $faq->delete();

            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['success' => false, 'error' => $ex->getMessage()]);
        }
    }

    public function sorting(Request $request)
    {
        try {
            foreach ($request->order as $sort_order => $strId) {
                $id = str_replace('row-', '', $strId);
                $faq = FAQ::find($id);
                $faq->sort_order = $sort_order;
                $faq->save();
            }
            return response()->json(['success' => true]);
        } catch (Exception $ex) {
            return response()->json(['success' => false, 'error' => $ex->getMessage]);
        }
    }
}
