<?php

namespace App\Http\Controllers\EspacePublic;

use App\Http\Controllers\Controller;
use App\Models\Site;
use App\Models\DemandeTitre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sites = Site::all();
        $demandeTitres = DemandeTitre::all();
        var_dump($demandeTitre);
        \Debugbar::info($sites);
        return view('public.home.index', compact('sites', 'demandeTitres'));
    }
}
