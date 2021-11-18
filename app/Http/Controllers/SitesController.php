<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\DemandeTitre;


class SitesController extends Controller
{
    public function index(){
        $sites = Site::all();
        $demandeTitres = DemandeTitre::all();
        \Debugbar::info($sites);
        return view("home.site",compact('sites', 'demandeTitres'));
    }

    public function show( Site $site){
        return view("home.show",compact("site"));
    }
}
