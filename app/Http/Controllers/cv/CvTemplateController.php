<?php

namespace App\Http\Controllers\cv;

use App\Http\Controllers\Controller;
use App\Models\cv\CvTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CvTemplateController extends Controller
{
    public function index()
    {
        $templates = CvTemplate::latest()->get();
        return view('admin.templates.index', compact('templates'));
    }

    public function create()
    {
        return view('admin.templates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'view_path' => 'required|string',
            'is_premium' => 'boolean'
        ]);

        $path = $request->file('thumbnail')->store('templates', 'public');

        CvTemplate::create([
            'name' => $request->name,
            'thumbnail' => $path,
            'view_path' => $request->view_path,
            'is_premium' => $request->has('is_premium')
        ]);

        return redirect()->route('manage-templates.index')->with('success', 'Template berhasil ditambahkan!');
    }

    public function edit(CvTemplate $manage_template)
    {
        return view('admin.templates.edit', ['template' => $manage_template]);
    }

    public function update(Request $request, CvTemplate $manage_template)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'view_path' => 'required|string',
        ]);

        if ($request->hasFile('thumbnail')) {
            Storage::disk('public')->delete($manage_template->thumbnail);
            $manage_template->thumbnail = $request->file('thumbnail')->store('templates', 'public');
        }

        $manage_template->update([
            'name' => $request->name,
            'view_path' => $request->view_path,
            'is_premium' => $request->has('is_premium')
        ]);

        return redirect()->route('manage-templates.index')->with('success', 'Template diperbarui!');
    }

    public function destroy(CvTemplate $manage_template)
    {
        Storage::disk('public')->delete($manage_template->thumbnail);
        $manage_template->delete();
        return back()->with('success', 'Template dihapus!');
    }
}
