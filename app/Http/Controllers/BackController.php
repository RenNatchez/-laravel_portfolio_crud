<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Storage;

class BackController extends Controller
{
    public function index(){
        $utilisateur = Utilisateur::first();
        return view('admin.home',compact('utilisateur'));
    }
    public function edit(Utilisateur $id){
        $utilisateur = $id;
        return view('admin.utilisateur.edit', compact('utilisateur'));
    }
    public function udapte(Utilisateur $id, Request $request){
        request()->validate([
            "identite"=>["required"],
            "image"=>['image','mimes:jpeg,png,jpg,gif,svg',"max:2048"],
            "anniversaire"=>["required"],
            "poste"=>["required"],
            "age"=>["required","numeric",'max:110'],
            "site"=>["required"],
            "degree"=>["required"],
            "phone"=>["required"],
            "mail"=>["required"],
            "ville"=>["required"],
            "statut"=>["required"],
            "description"=>["required"],
            ]);
        $utilisateur = $id;
        if ($request->file('image') != null) {
            //STORAGE
                Storage::delete('public/img/'. $utilisateur->image);
                Storage::put('public/img/', $request->file('image'));
            //DB
                $utilisateur->image = $request->file('image')->hashName();
                $utilisateur->save();
        }
        $utilisateur->identite = $request->identite;
        $utilisateur->anniversaire = $request->anniversaire;
        $utilisateur->poste = $request->poste;
        $utilisateur->age = $request->age;
        $utilisateur->site = $request->site;
        $utilisateur->degree = $request->degree;
        $utilisateur->phone = $request->phone;
        $utilisateur->mail = $request->mail;
        $utilisateur->ville = $request->ville;
        $utilisateur->statut = $request->statut;
        $utilisateur->description = $request->description;
        $utilisateur->save();
        return redirect()->route('admin.home');
    }
}
