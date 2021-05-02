<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(){
        $portfolio = Portfolio::all();
        $utilisateur = Utilisateur::first();
        return view('admin.portfolio.portfolio',compact('portfolio','utilisateur'));
    }
    public function create() {
        return view('admin.portfolio.create');
    }
    public function store(Request $request){
        request()->validate([
            "filter"=>["required"],
            "image"=>["required"],
            "lien"=>["required","min:4"],
        ]);
        Storage::put('public/img/', $request->file('image'));
        $portfolio = new Portfolio();
        $portfolio->filter = $request->filter;
        $portfolio->image = $request->file('image')->hashName();
        $portfolio->lien = $request->lien;
        $portfolio->save();
        return redirect()->route('admin.portfolio')->with('success', 'test');
 }
 public function destroy(Portfolio $id) {
     $id->delete();
     return redirect()->back()->with('warning', 'test');
 }
 public function show(Portfolio $id){
     $portfolio = $id;
     return view('admin.portfolio.show', compact('portfolio'));
 }

 public function edit(Portfolio $id){
     $portfolio = $id;
     return view('admin.portfolio.edit', compact('portfolio'));
 }

 public function udapte(Portfolio $id, Request $request){
    request()->validate([
        "filter"=>["required"],
        "image"=>["required"],
        "lien"=>["required"],
    ]);
     $portfolio = $id;
     if ($request->file('image') != null) {
        //STORAGE
        Storage::delete('public/img/'. $portfolio->image);
        Storage::put('public/img/', $request->file('image'));
        //DB
        $portfolio->image = $request->file('image')->hashName();
        $portfolio->save();
    }
     $portfolio->filter = $request->filter;
     $portfolio->lien = $request->lien;
     $portfolio->save();
     return redirect()->route('admin.portfolio');
 }

}
