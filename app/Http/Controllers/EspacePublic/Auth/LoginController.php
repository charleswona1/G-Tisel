<?php

namespace App\Http\Controllers\EspacePublic\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('public.auth.login',compact('lang'));
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->get('remember'))) {
            $request->session()->regenerate();
            $user = User::where('email',$credentials['email'])->first();
            $user->last_login_at = Carbon::now();
            $user->save();

            return redirect()->intended(route('public.site'));
        }


        Session::flash('error', "Aucun compte n'a été trouvé avec ces identifiants");

        return redirect()->route('public.auth.login');
    }
}
