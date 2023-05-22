<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SEANCE extends Model
{
    use HasFactory;

    protected $table= 'SEANCE';
    protected $primaryKey = 'idSeance';
    public $timestamps = false;
 
    protected $fillable = ['dateSeance','heureDeb','heureFin','idAdherent','idCategorie' ];
    

    public function VIGNERON(){
        return $this->belongsTo(Vigneron::class,'idAdherent');
    }

    public function CATEGORIE(){
        return $this->belongsTo(Categorie::class,'idCategorie');
    }

    public function ADHERENT(){
        return $this->belongsToMany('App\Models\adherent','participer','idSeance','idAdherent')->withPivot('absent');
    }


   
}
