<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\TypeCompte;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function index(){
        $admins = Admin::all();
        return view('admin.users.index',compact("admins"));
    }

    public function create(){
        $types = TypeCompte::all();
        return view('admin.users.form',compact('types'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('admins')],
            'poste'  => ['required'],
            'type_compte_id'  => ['required'],
            'codePostale'  => ['required'],
            'phone'=>['required']
        ]);

        $admin = new Admin();
        $admin->fill($data);
        $admin->password = "123456";
        $admin->save();

        Session::flash('success', "loe compte a été ajouté avec succes");

        return redirect()->route('admin.personnel');
    }

    public function edit(Admin $admin){
        $types = TypeCompte::all();
        return view('admin.users.edit',compact('types','admin'));
    }

    public function update(Admin $admin,Request $request){
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('admins')],
            'poste'  => ['required'],
            'type_compte_id'  => ['required'],
            'codePostale'  => ['required'],
            'phone'=>['required']
        ]);

        $admin->fill($data);
        $admin->password = "123456";
        $admin->save();

        Session::flash('success', "le compte a été mise a jour avec succes");

        return redirect()->route('admin.personnel');
    }

    public function delete(Admin $admin){
        $admin->delete();
        Session::flash('success', "le compte du personnelle a été supprimé avec succes");

        return redirect()->route('admin.personnel');
    }

}
