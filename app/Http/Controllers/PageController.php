<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    // Menampilkan semua halaman
    public function index()
    {
        $pages = Page::orderBy('created_at', 'DESC')->get();
        return view('pages.index', compact('pages'));
    }

    // Menampilkan formulir untuk membuat halaman baru
    public function create()
    {
        return view('pages.create');
    }

    // Menyimpan halaman baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required'
        ]);
        $jsonFilePath = storage_path('app/public/default.json');
        $jsonContent = file_get_contents($jsonFilePath);

        $requestData = $request->all();
        $requestData['content'] = $jsonContent;

        Page::create($requestData);

        return redirect()->route('pages.index')->with('success', 'Page created successfully');
    }

    // Menampilkan halaman tertentu
    public function show($id)
    {
        $page = Page::findOrFail($id);
        return view('pages.preview', compact('page'));
    }

    // Menampilkan formulir untuk mengedit halaman
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('pages.edit', compact('page'));
    }

    // Memperbarui halaman dalam database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required'
        ]);

        $page = Page::findOrFail($id);
        $page->update($request->all());

        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }

    // Menghapus halaman dari database
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Page deleted successfully');
    }

}
