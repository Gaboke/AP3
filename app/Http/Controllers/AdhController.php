<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\SEANCE;
use App\Models\Categorie;
use App\Models\VIGNERON;
use App\Models\PARTICIPER;

class AdhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Les_Seances = SEANCE::all();
        
       $user = Auth::user();
       return view("Seances.gestionSeancesAdh",['Les_Seances'=>$user->SEANCE]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $s = Seance::find($id);
        return view('Seances.detailSeance', ['seance'=>$s]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $s = Seance::find($id);
        $s->dateSeance = $request->input('dateSeance');
        $s->heureDeb = $request->input('heureDeb');
        $s->heureFin = $request->input('heureFin');
        $s->idAdherent = $request->input('idVigneron');
        $s->idCategorie = $request->input('idCategorie');
        
        $s->save();
        return redirect('seances');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
