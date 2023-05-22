<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EVENEMENT extends Model
{
    use HasFactory;

    protected $table= 'EVENEMENT';
    protected $primaryKey = 'idEvenement';
    public $timestamps = false;
 
    protected $fillable = ['nom','dateEvt','heureDeb','heureFin','idLieu','idCategorie' ];
    
    public function CATEGORIE(){
        return $this->hasMany(CATEGORIE::class,'idCategorie');
    }

    public function LIEU(){
        return $this->hasMany(Lieu::class,'idLieu');
    }

   

    public function VIGNERON(){
        return $this->belongsToMany('App\Models\VIGNERON','Animer','idEvenement','idAdherent');
    }

    public function ADHERENT(){
        return $this->belongsToMany('App\Models\Adherent','Réserver','idEvenement','idAdherent');
    }
}
