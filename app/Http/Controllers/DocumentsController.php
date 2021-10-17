<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
