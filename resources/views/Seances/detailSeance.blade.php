@extends ('template')
 @section('content')


 <h1>Categorie cours : {{$seance->idCategorie}}</h1>
 <ul>
 <li>Heure de début : {{$seance->heureDeb}}</li>
 <li>Heure de Fin : {{$seance->heureFin}}</li>
 <li>Entraineur : {{$seance->idAdherent}}</li>
</ul>

 @endsection