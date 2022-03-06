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
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use PDF;

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

        if($request->file("fichier_pdf") != null) {
            $name = $request->name.rand(0, 9999).".pdf";
            $path = $request->input("fichier_pdf")->storeAs(
                'siteUpload',
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

    public function download($path,$id)
    {
        $demande = DemandeTitre::find($id);
        
        
        $paths = 'storage/'.$demande["file".$path];
        if (file_exists($paths)) {
            $headers = array('Content-Type: application/pdf',);
            return Response::download($paths,null,$headers);
        }else{
            return Redirect()->back();
        }
    }

    public function generatePDF(DemandeTitre $demande)
    {

        $data = [
            'fisrt_name'=>$demande->user->fisrt_name,
            'last_name'=>$demande->user->last_name,
            'raison_social'=>$demande->raison_social,
            'nationalite'=>$demande->nationalite,
            'domicile'=>$demande->domicile,
            'ville'=>$demande->ville,
            'lieu'=>$demande->lieu,
            'tel'=>$demande->tel,
            'courriel'=>$demande->courriel,
            'fax'=>$demande->fax,
            'code_postal'=>$demande->code_postal,
            'email'=>$demande->email,
            'objet'=>$demande->objet,
            'fonction_1'=>$demande->fonction_1,
            'courriel1'=>$demande->courriel1,
            'fax1'=>$demande->fax1,
            'code_postal1'=>$demande->code_postal1,
            'fonction_1'=>$demande->fonction_1,
            'courriel1'=>$demande->courriel1,
            'fax1'=>$demande->fax1,
            'code_postal1'=>$demande->code_postal1,
            'fonction_2'=>$demande->fonction_2,
            'courriel2'=>$demande->courriel2,
            'fax2'=>$demande->fax2,
            'code_postal2'=>$demande->code_postal2,
            'fonction_3'=>$demande->fonction_3,
            'courriel3'=>$demande->courriel3,
            'fax3'=>$demande->fax3,
            'code_postal3'=>$demande->code_postal3,
            'fonction_4'=>$demande->fonction_4,
            'courriel4'=>$demande->courriel4,
            'fax4'=>$demande->fax4,
            'code_postal4'=>$demande->code_postal4,
            'perimetre'=>$demande->perimetre,
            'libelle_activite'=>$demande->activite->libelle_activite,
            'lieu_implementation'=>$demande->lieu_implementation
        ];
          
        $pdf = PDF::loadView('demandePDF', $data);
    
        return $pdf->download('demande.pdf');
    }

}
