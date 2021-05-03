<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Header;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $utilisateur = Utilisateur::first();
        $facts = Fact::all();
        $skills = Skill::all();
        // $servicess = Service::all();
        $services = Service::paginate(3)->fragment('services');
        $portfolios = Portfolio::all();
        return view('template.home',compact('portfolios','utilisateur','facts','skills','services'));
    }

}
