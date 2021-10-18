<?php

namespace App\Http\Controllers\EspacePublic\Sites;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\DemandeTitre;
use Illuminate\Support\Facades\Auth;

class SitesController extends Controller
{
    public function index(){
        $sites = Site::all();
        return view("public.site.index",compact('sites'));
    }

    public function show(Site $site){
        return view("public.site.show",compact("site"));
    }

    public function mySite(){
        return view("public.site.my-site");
    }

    public function demand(Site $site){
        return view("public.site.demand",compact("site"));
    }

    public function storeDemandeTitre(Site $site, Request $request) {
        $demandeTitreValidate = $request->validate([
            'name' => ['required'],
            'first_name' => ['required'],
            'raison_social' => ['required'],
            'nationalite' => ['required'],
            'domicile' => ['required'],
            'ville' => ['required'],
            'lieu' => ['required'],
            'tel' => ['required'],
            'courriel' => ['required'],
            'fax' => ['required'],
            'code_postal' => ['required'],
            'email' => ['required'],
            'objet' => ['required'],
            'fonction_1' => ['required'],
            'courriel1' => ['required'],
            'fax1' => ['required'],
            'code_postal1' => ['required'],
            'fonction_2' => ['required'],
            'courriel2' => ['required'],
            'fax2' => ['required'],
            'code_postal2' => ['required'],
            'fonction_3' => ['required'],
            'courriel3' => ['required'],
            'fax3' => ['required'],
            'code_postal3' => ['required'],
            'fonction_4' => ['required'],
            'courriel4' => ['required'],
            'fax4' => ['required'],
            'code_postal4' => ['required'],
            'perimetre' => ['required'],
            'activite_id' => ['required'],
            'lieu_implementation' => ['required'],
            'file1' => ['required'],
            'file2' => ['required'],
            'file3' => ['required'],
            'file4' => ['required'],
            'file5' => ['required'],
            'file6' => ['required'],
            'file7' => ['required'],
            'file8' => ['required'],
            'file9' => ['required'],
            'file10' => ['required'],
            'file11' => ['required'],
            'file12' => ['required'],
            'file13' => ['required'],
            'file14' => ['required'],
        ]);

        $sites = Site::all();
        sleep((3000/1000));
        Session::flash('success', "Demande envoyé avec success");
        $this::index();

        return redirect()->route('public.site');

        /*$demandeTitre = new DemandeTitre();
        $demandeTitre->fill($demandeTitreValidate);
        $demandeTitre->site_id = $site->id;
        $demandeTitre->user_id = Auth::user()->id;
        $demandeTitre.save();

        for ($i=1; $i <= 14; $i++) { 
            $file = $request->file('file'.$i);
            $name = date("Y/m/d").$file->getClientOriginalExtension();
            $path = $fileData->storeAs(
                'attachementDemandes',
                $name,
                'public'
            );
            $demandeTitre = new DemandeTitre();
            $demandeTitre->file1 = $site->id;
            $demandeTitre.save();  
        }
       
        Session::flash('success', "Demande envoyé avec success");

        return redirect()->route('pubic.site');*/
    }
}