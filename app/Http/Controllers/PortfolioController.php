<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

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
        $portfolio = new Portfolio();
        $portfolio->filter = $request->filter;
        $portfolio->image = $request->image;
        $portfolio->lien = $request->lien;
        $portfolio->save();
     return redirect()->route('admin.portfolio');
 }
 public function destroy(Portfolio $id) {
     $id->delete();
     return redirect()->back();
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
     $portfolio = $id;
     $portfolio->filter = $request->filter;
     $portfolio->image = $request->image;
     $portfolio->lien = $request->lien;
     $portfolio->save();
     return redirect()->route('admin.portfolio');
 }

}
