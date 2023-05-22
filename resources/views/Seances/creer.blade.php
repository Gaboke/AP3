@extends("template")

@section('content')

<h1>Création d'un nouveau cours</h1>

<form method="post" action="{{ route('seances.store') }}">

@csrf

<div class="row">

<div class="col-md-5">
  <label for="dateSeance" class="col-sm-4">
    Veuillez saisir votre date d'inscription :<br>
    <input type="date" class="form-control col-sm-6" name=dateSeance required>
    
  </label><br><br>


<div class="form-group row"> <label for="heureDeb" class="col-sm-4">Heure debut de la séance: </label><br>
<input type="text" class="form-control col-sm-6" name=heureDeb required> </div>
<br>
<div class="form-group row"> <label for="heureFin" class="col-sm-4">Heure fin de la séance: </label><br>
<input type="text" class="form-control col-sm-6" name=heureFin required> </div>
<br>
 Catégorie: <br>
  <select name="idCategorie">
  @foreach ($idCategorie as $c)
    <option value="{{$c->idCategorie}}">{{$c->niveau}}</option>
  @endforeach
  </select>
  <br>

  <br>
 Entraineur: <br>
  <select name="idEntraineur">
  @foreach ($idEntraineur as $c)
    <option value="{{$c->idAdherent}}">{{$c->ADHERENT->prenom}}</option>
  @endforeach
  </select>

  <br><br><br>

<div class="btn">
  <button class="btn-primary" type="submit" >Envoyer</button>
</div>
</form>
<!-- <input tune="text" class" form-control col-sm-6" name =description required> -->