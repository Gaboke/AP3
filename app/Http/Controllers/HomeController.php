<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Entraineur;
use App\Models\Adherent;
use App\Models\Seance;
use App\Models\VIGNERON;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $id =  $user->idAdherent;
        if (VIGNERON::find($id)){
            return view("homeEnt");
        }
        else{
            return view("homeAdh");
        }
        
    }
}
