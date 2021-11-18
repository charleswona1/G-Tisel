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
        $demandeTitres = DemandeTitre::all();
        //var_dump($demandeTitres[0]->site->description);
        return view("public.site.index",compact('sites', 'demandeTitres'));
    }

    public function show(Site $site){
        $demandeTitres = DemandeTitre::all();
        return view("public.site.show",compact("site", "demandeTitres"));
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
            'nom_eau' => [''],
            'ouvrage_hydro' => [''],
            'profil_long_eau' => [''],
            'profil_en_travers' => [''],
            'caracteristique_site' => [''],
            'pays_origines' => [''],
            'standart' => [''],
            'file1' => [''],
            'file2' => [''],
            'file3' => [''],
            'file4' => [''],
            'file5' => [''],
            'file6' => [''],
            'file7' => [''],
            'file8' => [''],
            'file9' => [''],
            'file10' => [''],
            'file11' => [''],
            'file12' => [''],
            'file13' => [''],
            'file14' => [''],
            'file15' => [''],
            'file16' => [''],
            'file17' => [''],
            'file18' => [''],
            'file19' => [''],
            'file20' => ['']
        ]);

    
        /*sleep((3000/1000));
        Session::flash('success', "Demande envoyé avec success");
        $this::index();

        return redirect()->route('public.site');*/


        $demandeTitre = new DemandeTitre();
        $demandeTitre->fill($demandeTitreValidate);
        $demandeTitre->site_id = $site->id;
        $demandeTitre->user_id = Auth::user()->id;
        $demandeTitre->status = 'Pending';
        
        /*for ($i=1; $i <= 20; $i++) { 
            $fileData = $request->file('file'.$i);
            if($fileData != null) {
                $name = date('yyyy-mm-dd').$fileData->getClientOriginalExtension();
                $path = $fileData->storeAs(
                    'attachementDemandes',
                    $name,
                    'public'
                );
                $demandeTitre->file.$i = $path;
            }
            
        }*/
        $demandeTitre->save();

       
        Session::flash('success', "Demande envoyé avec success");

        $demandeTitres = DemandeTitre::all();
        $sites = Site::all();
        return view("public.site.index",compact('sites', 'demandeTitres'));
    }
}