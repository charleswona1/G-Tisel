<?php

namespace App\Http\Controllers\EspacePublic\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('public.auth.register');
    }
}
