<?php

namespace App\Http\Controllers\EspacePublic\Sites;
use App\Http\Controllers\Controller;
use App\Models\Activite;
use App\Models\Arrondissement;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\DemandeTitre;
use App\Models\Departement;
use App\Models\Regime;
use App\Models\Region;
use App\Models\SourceEnergie;
use Illuminate\Support\Facades\Auth;

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
        //var_dump($demandeTitres[0]->site->description);
        return view("public.site.index",compact('sites','regimes','sources','regions','arrondissements','departements','activites', 'demandeTitres','optRegime','optSource','optArrond'));
    }

    public function getSiteByRegime($regime_id) {
        $sites = Site::where('regime_id', $regime_id);
        $demandeTitres = DemandeTitre::all();
        return view("public.site.index",compact('sites', 'demandeTitres'));
    }

    public function getSiteByLocality($arrondissement_id, $departement_id, $region_id) {
        $sites = Site::where('arrondissement_id', $arrondissement_id)
        ->orWhere('arrondissement.departement_id', $departement_id)
        ->orWhere('departement.region_id', $region_id);
        $demandeTitres = DemandeTitre::all();
        return view("public.site.index",compact('sites', 'demandeTitres'));
    }

    public function getSiteByActivity($source_id) {
        $sites = Site::where('source_id', $source_id);
        $demandeTitres = DemandeTitre::all();
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
        ]);


    
        $demandeTitre = new DemandeTitre();
        $demandeTitre->fill($demandeTitreValidate);
        $demandeTitre->site_id = $site->id;
        $demandeTitre->user_id = Auth::user()->id;
        $demandeTitre->status = 'Pending';
<<<<<<< HEAD

        /*for ($i=1; $i <= 20; $i++) {
            $fileData = $request->file('file'.$i);
=======
        
        for ($i=1; $i <= 15; $i++) { 
            $fileData = $request->file('pdf'.$i);
>>>>>>> 15ec622f079040fdb5261d716ad09255f60e8e6f
            if($fileData != null) {
                $name = date('yyyy-mm-dd HH:mm:ss').$fileData->getClientOriginalExtension();
                $path = $fileData->storeAs(
                    'attachementDemandes',
                    $name,
                    'public'
                );
                $demandeTitre->file.$i = $path;
            }
<<<<<<< HEAD

        }*/
=======
            
        }
>>>>>>> 15ec622f079040fdb5261d716ad09255f60e8e6f
        $demandeTitre->save();


        Session::flash('success', "Demande envoyé avec success");

        $demandeTitres = DemandeTitre::all();
        $sites = Site::all();
        return redirect()->route('public.site');
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
