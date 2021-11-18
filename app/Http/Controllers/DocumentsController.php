<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    public function juridic(){
        return view("documents.textJuridique");
    }

    public function regime(){
        return view("documents.regime");
    }

    public function procedure(){
        return view("documents.procedure");
    }

    public function download(Request $request)
    {
        return Storage::download('/public/textes/'.$request->fichier);
    }
}
