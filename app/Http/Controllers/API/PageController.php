<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function loadProjectApi($id)
    {
        $page = Page::findOrFail($id);
        return response()->json([
            'success' => true,
            'data' => json_decode($page->content),
            'message' => 'Success load page content'
        ]);
    }

    public function storeProjectApi(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->update(['content' => json_encode($request->input('data'))]);

        return response()->json([
            'success' => true,
            'data' => null,
            'message' => 'Project stored successfully'
        ]);
    }
}
