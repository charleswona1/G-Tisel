<?php

namespace App\Http\Controllers\EspacePublic\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index(){
        return view('public.auth.register');
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



        $user = new User();
        $user->fill($data);
        $user->last_login_at = Carbon::now();
        if ($user->save()) {
            Auth::login($user);
            event(new Registered($user));
            Session::flash('success', "<strong>Votre compte a bien été créé</strong><br/>Votre compte devra être activé pour accéder à la plateforme. Vous serez averti par e-mail.");
            return redirect()->route('verification.notice');
        }else {
            Session::flash('error', "<strong>La création de votre compte n'a pas pu être finalisée.</strong><br/>Merci de remplir à nouveau le formulaire, en remplissant tous les champs obligatoires.");
            return redirect()->route('public.auth.register');
        }
    }
}
