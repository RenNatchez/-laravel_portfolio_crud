<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index(){
        $facts = Fact::all();
        $utilisateur = Utilisateur::first();
        return view('admin.facts.fact',compact('facts','utilisateur'));
    }
    public function create() {
        return view('admin.facts.create');
    }
    public function store(Request $request){
        $facts = new Fact();
        $facts->nombre = $request->nombre;
        $facts->gras = $request->gras;
        $facts->logo = $request->logo;
        $facts->normal = $request->normal;
        $facts->save();
     return redirect()->route('admin.fact');
 }
 public function destroy(Fact $id) {
     $id->delete();
     return redirect()->back();
 }
 public function show(Fact $id){
     $facts = $id;
     return view('admin.facts.show', compact('facts'));
 }

 public function edit(Fact $id){
     $facts = $id;
     return view('admin.facts.edit', compact('facts'));
 }

 public function udapte(Fact $id, Request $request){
     $facts = $id;
     $facts->nombre = $request->nombre;
     $facts->gras = $request->gras;
     $facts->logo = $request->logo;
     $facts->normal = $request->normal;
     $facts->save();
     return redirect()->route('admin.fact');
 }

}
