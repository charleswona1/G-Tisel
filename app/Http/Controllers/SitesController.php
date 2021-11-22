<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Arrondissement;
use App\Models\Departement;
use App\Models\Regime;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\DemandeTitre;

use App\Models\SourceEnergie;

class SitesController extends Controller
{
    public function index(Request $request){
        $sites = Site::all();
        $demandeTitres = DemandeTitre::all();
        $regimes = Regime::all();
        $sources = SourceEnergie::all();
        $regions = Region::all();
        $arrondissements = Arrondissement::all();
        $departements = Departement::all();
        $activites = Activite::all();

        $optRegime = "";
        $optSource = "";
        $optArrond = "";
        if ($request->regime!=null) {
            $optRegime = Regime::find($request->regime);
            $sites = Site::where('regime_id',$request->regime)->get();
        }
        if ($request->source!=null) {
            $optSource = SourceEnergie::find($request->source);
            $sites = Site::where('source_id',$request->source)->get();
        }
        if ($request->arrond!=null) {
            $optArrond = Arrondissement::find($request->arrond);
            
            $sites = Site::where('arrondissement_id',$request->arrond)->get();
        }

        \Debugbar::info($sites);
        return view("home.site",compact('sites','regimes','sources','regions','arrondissements','departements','activites', 'demandeTitres','optRegime','optSource','optArrond'));
    }

    public function show( Site $site){
        return view("home.show",compact("site"));
    }

    public function search(Request $request){
        $reqRegion = $request->region;
        $reqdepart = $request->depart;

        if ($reqRegion != null) {
            $departements = Departement::where('region_id',$reqRegion)->get();
            return $departements;
        }

        if ($reqdepart != null) {
            $arrondissements = Arrondissement::where('departement_id',$reqdepart)->get();
            return $arrondissements;
        }
    }
}
