<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skill = Skill::all();
        $utilisateur = Utilisateur::first();
        return view('admin.skill.skill',compact('skill','utilisateur'));
    }
    public function create() {
        return view('admin.skill.create');
    }
    public function store(Request $request){
        request()->validate([
            "name"=>["required"],
            "level"=>["required","numeric"],
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->level = $request->level;
        $skill->save();
     return redirect()->route('admin.skill')->with('success', 'Ajouter effectuer');
 }
 public function destroy(Skill $id) {
     $id->delete();
     return redirect()->back()->with('warning', 'Suppression effectuer');
 }
 public function show(Skill $id){
     $skill = $id;
     return view('admin.skill.show', compact('skill'));
 }

 public function edit(Skill $id){
     $skill = $id;
     return view('admin.skill.edit', compact('skill'));
 }

 public function udapte(Skill $id, Request $request){
    request()->validate([
        "name"=>["required"],
        "level"=>["required","numeric"],
    ]);
     $skill = $id;
     $skill->name = $request->name;
     $skill->level = $request->level;
     $skill->save();
     return redirect()->route('admin.skill');
 }

}
