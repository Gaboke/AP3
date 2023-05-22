<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ADHERENT extends Authenticatable
{
    use HasFactory;

    protected $table= 'ADHERENT';
    protected $primaryKey = 'idAdherent';
    public $timestamps = false;
 
    protected $fillable = ['nom','prenom','mail','tel','genre','adresse','age','idTarif','idCategorie','adhesionRenouvelee','pswd' ];

    public function getAuthPassword(){
        return $this->pswd;
    }
    
    public function VIGNERON(){
        return $this->hasOne('App\Models\VIGNERON','idAdherent');
    }

    public function TARIF(){
        return $this->belongsTo(Tarif::class,'idTarif');
    }

    public function CATEGORIE(){
        return $this->belongsTo(CATEGORIE::class,'idCategorie');
    }

    public function SEANCE(){
        return $this->belongsToMany('App\Models\Seance','participer','idAdherent','idSeance')->withPivot('absent');
        
    }
    
    public function Evenement(){
        return $this->belongsToMany('App\Models\Adherent','Réserver','idAdherent','idEvenement');
    }
   
}
