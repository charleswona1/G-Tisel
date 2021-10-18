<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Arrondissement;
use App\Models\Departement;
use App\Models\Regime;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\SourceEnergie;

class SitesController extends Controller
{
    public function index(){
        $sites = Site::all();
        $regimes = Regime::all();
        $sources = SourceEnergie::all();
        $regions = Region::all();
        $arrondissements = Arrondissement::all();
        $departements = Departement::all();
        $activites = Activite::all();

        \Debugbar::info($sites);
        return view("home.site",compact('sites','regimes','sources','regions','arrondissements','departements','activites'));
    }

    public function show( Site $site){
        return view("home.show",compact("site"));
    }
}
