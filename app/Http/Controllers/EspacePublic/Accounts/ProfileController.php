<?php

namespace App\Http\Controllers\EspacePublic\Accounts;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('public.profil',compact('user'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'fisrt_name' => [''],
            'last_name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => ['required','min:6'],
            'country'  => ['required'],
            'city'  => ['required'],
            'codePostale'  => ['required'],
            'user_name'   => ['required'],
            'phone'=>['required']
        ]);



        $user = User::find($request->id);
        $user->fill($data);
        $user->last_login_at = Carbon::now();
        if ($user->save()) {
            Auth::login($user);
            Session::flash('error', "<strong>Votre compte a été modifier</strong><br/>");
            return redirect()->route('public.index');
        }else {
            Session::flash('error', "<strong>La création de votre compte n'a pas pu être finalisée.</strong><br/>Merci de remplir à nouveau le formulaire, en remplissant tous les champs obligatoires.");
            return redirect()->route('public.auth.register');
        }
    }
}
