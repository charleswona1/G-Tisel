<?php

namespace App\Http\Controllers\EspacePublic;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sites = Site::all();
        \Debugbar::info($sites);
        return view('public.home.index', compact('sites'));
    }
}
