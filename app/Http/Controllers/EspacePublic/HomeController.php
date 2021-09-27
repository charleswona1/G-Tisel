<?php

namespace App\Http\Controllers\EspacePublic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($lang){
        return "espace public";
    }
}
