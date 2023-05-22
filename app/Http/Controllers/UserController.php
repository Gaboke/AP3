<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SEANCE;
use App\Models\Categorie;
use App\Models\Vigneron;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Les_Seances = SEANCE::all();
       
       return view("Seances.gestionSeances",['Les_Seances'=>$Les_Seances]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idCategorie = Categorie::all();
        $idVigneron = Vigneron::all();
         return view('Seances.creer',['idCategorie'=>$idCategorie,'idVigneron'=>$idVigneron ]);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $s = new SEANCE();
     $s->dateSeance = $request->input('dateSeance');
     $s->heureDeb = $request->input('heureDeb');
     $s->heureFin = $request->input('heureFin');
     $s->idAdherent = $request->input('idVigneron');
     $s->idCategorie = $request->input('idCategorie');
     $s->save();
     //Enregistrement des jointures avec les types d'activités
     return redirect('seances');

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
       $Seance = \App\Models\SEANCE::find($id);
       $lesVignerons = Vigneron::all();
       $LesCategories = Categorie::all();
       return view('seances.editSeance',compact('Seance','lesVignerons','LesCategories'));
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
        $s = Seance::find($id);
        $s->delete();
        return redirect ('seances');
    }
}
