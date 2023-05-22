  @extends("template")

  @section('content')

  <h1>Modification d'un cours</h1>

  <form method="post" action="{{ route('seances.update',$Seance->idSeance) }}">
    @method('PUT')

  @csrf

  <div class="row">

  <div class="col-md-5">
    <label for="dateSeance" class="col-sm-4">
      Veuillez saisir votre date d'inscription :<br>
      <input type="date" value={{$Seance->dateSeance}}  class="form-control col-sm-6" name=dateSeance required>
      
    </label><br><br>


  <div class="form-group row"> <label for="heureDeb" class="col-sm-4">Heure debut de la séance: </label><br>
  <input  type="text" value={{$Seance->heureDeb}} class="form-control col-sm-6" name=heureDeb required> </div>
  <br>
  <div class="form-group row"> <label for="heureFin" class="col-sm-4">Heure fin de la séance: </label><br>
  <input type="text" value={{$Seance->heureFin}} class="form-control col-sm-6" name=heureFin required> </div>
  <br>

  
  Entraineur: <br>
    <select name="idEntraineur">
    @foreach ($lesEntraineurs as $e)
    @if ($e->idAdherent== $Seance->entraineur->idAdherent)
      <option value="{{$e->idAdherent}}" selected>{{$e->ADHERENT->prenom}}</option>
      @else
      <option value="{{$e->idAdherent}}" >{{$e->ADHERENT->prenom}}</option>
      @endif
    @endforeach
    </select>

    <br>  <br>
    Catégorie: <br>
    <select name="idCategorie">
    @foreach ($LesCategories as $c)
    @if ($c->idCategorie == $Seance->idCategorie)
      <option value="{{$c->idCategorie}}" selected>{{$c->niveau}}</option>
      @else
      <option value="{{$c->idCategorie}}" >{{$c->niveau}}</option>
      @endif
    @endforeach
    </select>

    <br>
  <br>

  <div class="btn">
    <button class="btn-primary" type="submit" >Envoyer</button>
  </div>
  </form>
  <!-- <input tune="text" class" form-control col-sm-6" name =description required> -->