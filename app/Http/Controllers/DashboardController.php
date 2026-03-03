<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cv\UserCv;
use App\Models\cv\UserPackage;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Statistik ringkas untuk Dashboard Utama
        $data = [
            'total_cv' => UserCv::where('user_id', $userId)->count(),
            'active_package' => UserPackage::where('user_id', $userId)
                                ->where('status', 'active')
                                ->with('package')
                                ->first(),
            'recent_cvs' => UserCv::where('user_id', $userId)
                            ->latest()
                            ->take(3)
                            ->get(),
        ];

        return view('dashboard', $data);
    }
}
