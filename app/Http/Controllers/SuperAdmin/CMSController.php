<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CMSRequest;
use App\Models\CMS;

class CMSController extends Controller
{
    public function index(Request $request) {

        try {
            $query = CMS::query();

            if ($request->ajax()) {

                if ($request->has('name') && !empty($request->name)) {
                    $query->where('name', 'LIKE', '%' . $request->name . '%');
                }

                if ($request->has('date') && !empty($request->date)) {
                    $query->whereDate('created_at', $request->date);
                }

                $cms= $query->orderBy('id', 'desc')->paginate(10);

                return response()->json([
                    'success' => true,
                    'data' => $cms->items(),
                    'pagination' => [
                        'current_page' => $cms->currentPage(),
                        'last_page' => $cms->lastPage(),
                        'per_page' => $cms->perPage(),
                        'total' => $cms->total(),
                        'first_item' => $cms->firstItem(),
                        'last_item' => $cms->lastItem(),
                        'links' => $cms->links()->render(),
                    ]
                ]);
            }

            $data = [];
            $data['title'] = 'CMS';
            $data['cms'] = CMS::paginate(10);
            return view('dashboard.cms.index', $data);
        }catch (\Exception $ex) {
            return response()->json(['success' => false, 'message' => $ex->getMessage()]);
        }

    }

    public function addContent($id = null) {
        $data = [];
        $data['title'] = 'CMS';
        $data['breadcrumb'] = $id ? 'Edit Content' : 'Add Content';

        if ($id) {
            $cmsContent = CMS::findOrFail($id);

            if ($cmsContent && $cmsContent->meta_description) {
                $cmsContent->meta_description = json_decode($cmsContent->meta_description, true);
            }

            $data['cmsContent'] = $cmsContent;
        }
        return view('dashboard.cms.add-content', $data);
    }

    public function store(CMSRequest $request, $id = null) {
        $request->validated();
        $meta = json_encode($request->input('meta'));

        if ($id && $request->has('slug'))
        {
            $slug = generateUniqueSlug($request->slug, CMS::class, $id);
        } else {
            $slug = generateUniqueSlug($request->name, CMS::class);
        }


        $data = CMS::updateOrCreate(
            ['id' => $id],
            [
                'name' => $request->name,
                'slug' => $slug,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'meta_description' => $meta]
        );

        return redirect()->route('admin.cms.index');
    }

    public function delete($id) {
        $data = CMS::findOrFail($id);
        $data->delete();

        return response()->json(['success' => true]);
    }
}
