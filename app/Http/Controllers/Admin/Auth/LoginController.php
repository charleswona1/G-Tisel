<?php

namespace App\Http\Controllers\Admin\Auth;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('admin.auth.auth');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        Auth::logout();
        if (Auth::guard('admin')->attempt($credentials, $request->get('remember'))) {
            $request->session()->regenerate();
            $admin = Admin::where('email',$credentials['email'])->first();
            $admin->last_login_at = Carbon::now();
            $admin->save();
            return redirect()->intended(route('admin.dashboard'));
        }

        Session::flash('error', "Aucun compte n'a été trouvé avec ces identifiants");

        return redirect()->route('admin.auth.login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/auth/login');
    }
}
