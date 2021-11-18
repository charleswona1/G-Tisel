<?php

namespace App\Http\Controllers\Admin\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\Arrondissement;
use App\Models\Departement;
use App\Models\Regime;
use App\Models\Region;
use App\Models\SourceEnergie;
use App\Models\UploadFileSite;
use App\Models\SiteSourceEnergie;
use Illuminate\Support\Facades\Session;

class SitesController extends Controller
{
    public function index(){
        $sites = Site::all();

        return view('admin.sites.index',compact('sites'));
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

    public function create(Request $request){
        $arrondissements = Arrondissement::all();
        $regions = Region::all();
        $departements = Departement::all();
        $regimes = Regime::all();
        $sourceEnergies = SourceEnergie::all();
       

        return view('admin.sites.form',compact('arrondissements','regions','departements','regimes','sourceEnergies'));
    }

    public function store(Request $request){ 

        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'publication' => [''],
            'localite' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
            'capacite' => ['required'],
            'arrondissement_id' => ['required'],
            'regime_id' => ['required'],
            'source_id' => ['required'],
            'files' => ['required'],
            'files.*' => ['mimes:jpeg,jpg,png','max:4096']
        ]);

        $site = new site();
        $site->fill($data);
        $site->save();

        // \Debugbar::info($request->file('files'));
        
        foreach($request->file('files') as $key=>$fileData)
        {
            \Debugbar::info($fileData);
            $name = $request->name.rand(0, 9999).$key.".".$fileData->getClientOriginalExtension();
            $path = $fileData->storeAs(
                'siteUpload',
                $name,
                'public'
            );  
            $upload = new UploadFileSite();
            $upload->url = $path;
            $upload->site_id = $site->id;
            $upload->save();

        }

        Session::flash('success', "site ajouté avec succes");

        return redirect()->route('admin.index');

    }

    public function edit(Site $site){
        $arrondissements = Arrondissement::all();
        $regions = Region::all();
        $departements = Departement::all();
        $regimes = Regime::all();
        $sourceEnergies = SourceEnergie::all();

        return view('admin.sites.edit',compact('arrondissements','regions','departements','regimes','sourceEnergies','site'));
    }

    public function update(Site $site,Request $request){
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'publication' => [''],
            'localite' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
            'capacite' => ['required'],
            'arrondissement_id' => ['required'],
            'regime_id' => ['required'],
            'source_id' => ['required'],
        ]);

        $site->fill($data);
        $site->save();

        Session::flash('success', "site modifié avec succes");

        return redirect()->route('admin.index');
    }

    public function delete(Site $site){
        $site->delete();
        Session::flash('success', "site supprimer avec succes");

        return redirect()->route('admin.index');
    }

    public function sitePublier(){
        $sites = Site::where('publication','on')->get();

        return view('admin.sites.site-publier',compact('sites'));
    }

    public function siteNonPublier(){
        $sites = Site::where('publication','off')->get();

        return view('admin.sites.site-non-publier',compact('sites'));
    }

}
