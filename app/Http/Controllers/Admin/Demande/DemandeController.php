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

}
