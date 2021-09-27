<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function show()
    {
        return view('auth.verify-email');
    }

    public function request(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        
        return back()->with('message', 'Lien de vérification envoyé !');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect()->to('/fr/public/auth/login');
    }
}
