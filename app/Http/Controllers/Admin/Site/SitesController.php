<?php

namespace App\Http\Controllers\Admin\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\Arrondissement;
use App\Models\Regime;
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

    public function create(){
        $arrondissements = Arrondissement::all();
        $regimes = Regime::all();
        $sourceEnergies = SourceEnergie::all();
        return view('admin.sites.form',compact('arrondissements','regimes','sourceEnergies'));
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

        return redirect()->route('admin.create');

    }


}
