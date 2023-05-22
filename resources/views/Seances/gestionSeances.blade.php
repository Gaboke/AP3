@extends ('template')
 @section('content')
 <div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12 ">
            <div class="card">
                <div class="card-header">
                    <h2>Liste des Séances :</h2>
                </div>
                <br>
                <div class="card-body">
                    <a class="btn btn-primary" href="{{route('seances.create')}}">Ajouter un nouveau cours</a> 
                </div>
                <br>
                <div class="table-responsive">
                            <table class="table">
                            <thead>
                                    <tr>
                                        <th>Entraineur</th>
                                        <th>Seance</th>
                                        <th>Date</th>
                                        <th>Heure</th>
                                        <th>categorie</th>
                                        <th>action</th>
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
                                <a href="{{route('seances.show',$s->idSeance)}}" class="btn btn-outline-dark"> detail </a>
                                <a class="btn btn-primary" href="{{ route('seances.edit',$s->idSeance) }}">Modifier</a>
                                <form style="display:inline" action="{{route('seances.destroy', $s->idSeance)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Supprimer</button>

                    </form>
                                </td>
                            </tr>
                        @endforeach
              </div>
         </div>
    </div>

</tbody>
@endsection