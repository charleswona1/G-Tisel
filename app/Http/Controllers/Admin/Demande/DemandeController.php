<?php

namespace App\Http\Controllers\Admin\Demande;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\DemandeTitre;
use App\Models\Arrondissement;
use App\Models\Departement;
use App\Models\Regime;
use App\Models\Region;
use App\Models\SourceEnergie;
use App\Models\UploadFileSite;
use App\Models\SiteSourceEnergie;
use Illuminate\Support\Facades\Session;

class DemandeController extends Controller
{
    
    public function index() {
        $demandes = DemandeTitre::all();
        return view('admin.demandes.index',compact('demandes'));
    }

    public function demandeEnAttente() {
        $demandes = DemandeTitre::where('status', 'Pending')->get();
        return  view('admin.demandes.index',compact('demandes'));
    }

    public function demandeEnCours() {
        $demandes = DemandeTitre::where('status', 'Processed')->get();
        return  view('admin.demandes.index',compact('demandes'));
    }

    public function demandeEnRejetes() {
        $demandes = DemandeTitre::where('status', 'Dismiss')->get();
        return  view('admin.demandes.index',compact('demandes'));
    }

    public function changeStatus(DemandeTitre $demande, $status, $demandes) {
        $demande->status = $status;
        $demande->save();

        Session::flash('success', "Demande modifié avec succes"); 
        return  view('admin.demandes.index',compact('demandes'));
    }

    public function traitement(DemandeTitre $demande) {
        return  view('admin.demandes.demande_detail',compact('demande'));
    }

    public function saveTraitement(DemandeTitre $demande, Request $request) {
        $data = $request->validate([
            'name_requerant' => ['required'],
            'categorie' => ['required'],
            'description' => ['required'],
            'name_responsable' => ['required'],
            'status' => ['required'],
        ]);
        $path = "";

        if($request->input("fichier_pdf") != null) {
            $name = $request->name.rand(0, 9999).".".$request->input("fichier_pdf")->getClientOriginalExtension();
            $path = $fileData->storeAs(
                'attachementDemandes',
                $name,
                'public'
            );  
           
        }

        $demande->fill($data);
        $demande->status = $request->input("status");
        $demande->file16 = $path;
        $demande->save();

        Session::flash('success', "demande modifié avec succes");

        return redirect()->route('admin.index-demande');
    }

}
