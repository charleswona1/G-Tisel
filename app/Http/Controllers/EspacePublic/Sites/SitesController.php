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

    public function getSiteByActivity($activy_id) {
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

        if($request->file('pdf1') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf1')->getClientOriginalExtension();
            $path = $request->file('pdf1')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file1 = $path;
        }

        if($request->file('pdf2') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf2')->getClientOriginalExtension();
            $path = $request->file('pdf2')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file2 = $path;
        }

        if($request->file('pdf3') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf3')->getClientOriginalExtension();
            $path = $request->file('pdf3')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file3 = $path;
        }
        if($request->file('pdf4') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf4')->getClientOriginalExtension();
            $path = $request->file('pdf4')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file4 = $path;
        }
        if($request->file('pdf5') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf5')->getClientOriginalExtension();
            $path = $request->file('pdf5')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file5 = $path;
        }
        if($request->file('pdf6') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf6')->getClientOriginalExtension();
            $path = $request->file('pdf6')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file6 = $path;
        }
        if($request->file('pdf7') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf7')->getClientOriginalExtension();
            $path = $request->file('pdf7')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file7 = $path;
        }
        if($request->file('pdf8') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf8')->getClientOriginalExtension();
            $path = $request->file('pdf8')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file8 = $path;
        }
        if($request->file('pdf9') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf9')->getClientOriginalExtension();
            $path = $request->file('pdf9')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file9 = $path;
        }
        if($request->file('pdf10') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf10')->getClientOriginalExtension();
            $path = $request->file('pdf10')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file10 = $path;
        }
        if($request->file('pdf11') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf11')->getClientOriginalExtension();
            $path = $request->file('pdf11')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file11 = $path;
        }
        if($request->file('pdf12') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf12')->getClientOriginalExtension();
            $path = $request->file('pdf12')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file12 = $path;
        }
        if($request->file('pdf13') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf13')->getClientOriginalExtension();
            $path = $request->file('pdf13')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file13 = $path;
        }
       
        if($request->file('pdf14') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf14')->getClientOriginalExtension();
            $path = $request->file('pdf14')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file14 = $path;
        }
        if($request->file('pdf15') != null) {
            $name = $request->name.rand(0, 9999).".".$request->file('pdf15')->getClientOriginalExtension();
            $path = $request->file('pdf15')->storeAs(
                'siteUpload',
                $name,
                'public'
            );
            $demandeTitre->file15 = $path;
        }

        
        
        $demandeTitre->save();

       
        Session::flash('success', "Demande envoyé avec success");

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