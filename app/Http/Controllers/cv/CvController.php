<?php

namespace App\Http\Controllers\cv;

use App\Models\cv\{CvTemplate, CvPackage, UserPackage, UserCv};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function index()
    {
        $cvs = UserCv::where('user_id', Auth::id())
            ->with('template')
            ->latest()
            ->get();

        return view('cv.index', compact('cvs'));
    }

    public function templates()
    {
        $templates = CvTemplate::all();
        $packages = CvPackage::all();
        $activePackages = UserPackage::where('user_id', Auth::id())
            ->where('status', 'active')
            ->with('package')
            ->get();
        $cvs = UserCv::where('user_id', Auth::id())->get();

        return view('templates.index', compact('templates', 'packages', 'activePackages', 'cvs'));
    }

    public function purchase(Request $request, $id)
    {
        $package = CvPackage::findOrFail($id);
        UserPackage::create([
            'user_id' => Auth::id(),
            'cv_package_id' => $package->id,
            'remaining_slots' => $package->cv_limit,
            'status' => 'active'
        ]);
        return back()->with('success', 'Paket ' . $package->name . ' berhasil dibeli!');
    }

    public function createCv($template_id)
    {
        $template = CvTemplate::findOrFail($template_id);
        $package = UserPackage::where('user_id', Auth::id())
            ->where('remaining_slots', '>', 0)
            ->where('status', 'active')
            ->first();

        return view('cv.editor', compact('template', 'package'));
    }

    public function storeCv(Request $request, $template_id)
    {
        $request->validate([
            'cv_title' => 'required|string|max:255',
        ]);

        $template = CvTemplate::findOrFail($template_id);
        $user_id = Auth::id();

        if (!$template->is_premium) {
            $alreadyUsed = UserCv::where('user_id', $user_id)
                ->where('cv_template_id', $template_id)
                ->exists();

            if ($alreadyUsed) {
                return redirect()->route('templates.index')
                    ->with('error', 'Anda sudah pernah menggunakan template gratis ini.');
            }
        }

        $package = UserPackage::where('user_id', $user_id)
            ->where('remaining_slots', '>', 0)
            ->first();

        if ($template->is_premium && !$package) {
            return redirect()->route('templates.index')
                ->with('error', 'Template ini premium. Silakan beli paket terlebih dahulu.');
        }

        UserCv::create([
            'user_id' => $user_id,
            'cv_template_id' => $template_id,
            'user_package_id' => $template->is_premium ? $package->id : null,
            'cv_title' => $request->cv_title,
            'content' => json_encode($request->except(['_token', 'cv_title'])),
        ]);

        if ($template->is_premium && $package) {
            $package->decrement('remaining_slots');
        }

        return redirect()->route('cv.index')->with('success', 'CV berhasil disimpan!');
    }
}
