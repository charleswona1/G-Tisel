<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

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
        $user = User::find(Auth::id());
        $user->email_verified_at = Carbon::now();
        $user->save(); 
        $request->fulfill();
        return redirect()->to('/fr/public/auth/login');
    }
}
