 
@extends('template')
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h2>Liste des Entrainements</h2>
                </div>
                <br>
                <div class="card-body">
                      
                <br>
                <div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Seance</th>
                                        <th>Date</th>
                                        <th>Heure</th>
                                        <th>categorie</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Les_Seances as $s)
                            <tr>
                                <td>
                                {{$s->idAdherent}}
                                </td>
                                <td>
                                {{$s->dateSeance}}
                                </td>
         
                                <td>
                                {{$s->heureDeb}} 
                                </td>
                                <td>
                                {{$s->heureFin}}
                                </td>
                                <td>
                                {{$s->idCategorie}}
                                </td>
                                <td>
                                <a href="{{route('seancesAdh.show',$s->idSeance)}}" class="btn btn-outline-dark"> detail </a>

                            

                            
                                </td>
                            </tr>
                        @endforeach

                     
                    </div>  
                 

                    
                    </td>
                    </tr>
                    <br><br><br>

                
            </div>
        </div>
    </div>
</div>

</tbody>
@endsection