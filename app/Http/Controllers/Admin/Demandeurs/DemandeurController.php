<?php

namespace App\Http\Controllers\Admin\Demandeurs;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DemandeurController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.demandeurs.index',compact('users'));
    }

    public function activeCopmte(User $user){
        $user->email_verified_at = Carbon::now();
        $user->active = 1;
        $user->save();

        Session::flash('success', "le compte a été activé");
        return redirect()->back();
    }

    public function delete(User $user){
        $user->delete();
        Session::flash('success', "le compte a été supprimé");
        return redirect()->back();
    }
}
