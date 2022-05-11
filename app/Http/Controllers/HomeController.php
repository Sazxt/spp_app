<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActiveMemberMail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function coba(Request $request)
    {
        session(["so" => "ka"]);
    }

    public function dashboard(Request $request)
    {
        $role = Auth::user()->level;
        // $request->session()->forget("so");
        // $request->session()->put("anjing","pepek");
        // session()->forget("so");
        // session()->flush();
        switch ($role) {
            case 1:
                $request->session()->put("level","admin");
                return redirect()->to("/admin/dashboard");
            case 2:
                $request->session()->put("level","staff_tu");
                return redirect()->to("/staff_tu/dashboard");
            case 3:
                $request->session()->put("level","siswa");
                return redirect()->to("/siswa/dashboard");
            
            default:
                # code...
                break;
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
            'g-recaptcha-response' => 'recaptcha',
        ]);
        unset($credentials['g-recaptcha-response']);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'username' => true,
            'password' => true,
            'notifikasi' => 'The provided credentials do not match our records.'
        ]);
    }

}
