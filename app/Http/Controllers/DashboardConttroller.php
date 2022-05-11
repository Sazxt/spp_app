<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class DashboardConttroller extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index(Request $request)
    {
        $level = User::levelfiter();
        return view("dashboard",["level" => $level, "pages" => "Dashboard"]);
    }

    public function bayarspp()
    {
        $level = User::levelfiter();
        return view("bayaranspp",["level" => $level, "pages" => "Bayar Spp"]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
