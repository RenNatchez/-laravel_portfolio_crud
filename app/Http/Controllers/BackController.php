<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;


class BackController extends Controller
{
    public function index(){
        $utilisateur = Utilisateur::first();
        return view('admin.home',compact('utilisateur'));
    }
}
