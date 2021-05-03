<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $utilisater = Utilisateur::first();
        $service = Service::all();
        return view('admin.services.service',compact('utilisater','service'));
    }
    public function create() {
        return view('admin.services.create');
    }
    public function store(Request $request){
        request()->validate([
            "logo"=>["required"],
            "titre"=>["required"],
            "description"=>["required","min:10"],
            ]);
        $service = new Service();
        $service->logo = $request->logo;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->save();
     return redirect()->route('admin.service')->with('success', 'Ajouter effectuer');
 }
 public function destroy(Service $id) {
     $id->delete();
     return redirect()->back()->with('warning', 'Suppression effectuer');
 }
 public function show(Service $id){
     $service = $id;
     return view('admin.services.show', compact('service'));
 }

 public function edit(Service $id){
     $service = $id;
     return view('admin.services.edit', compact('service'));
 }

 public function udapte(Service $id, Request $request){
    request()->validate([
        "logo"=>["required"],
        "titre"=>["required"],
        "description"=>["required","min:10"],
        ]);
     $service = $id;
     $service->logo = $request->logo;
     $service->titre = $request->titre;
     $service->description = $request->description;
     $service->save();
     return redirect()->route('admin.service');
 }
}
