<?php

namespace App\Http\Controllers\EspacePublic\Sites;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\DemandeTitre;

class SitesController extends Controller
{
    public function index(){
        $sites = Site::all();
        \Debugbar::info($sites);
        return view("public.site.index",compact('sites'));
    }

    public function show(Site $site){
        return view("public.site.show",compact("site"));
    }

    public function demand(Site $site){
        return view("public.site.demand",compact("site"));
    }

    public function storeDemandeTitre(Site $site, Request $request) {
        $demandeTitreValidate = $request->validate([
            'activite_id' => ['required'],
            'user_id' => ['required'],
        ]);

        $demandeTitre = new DemandeTitre();
        $demandeTitre->fill($demandeTitreValidate);
        $demandeTitre->site_id = $site->id;
        $demandeTitre.save();

        Session::flash('success', "Demande envoyé avec success");

        return redirect()->route('pubic.site');
    }
}
