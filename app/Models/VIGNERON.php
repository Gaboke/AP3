<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VIGNERON extends Model
{
    use HasFactory;

    protected $table= 'VIGNERON';
    protected $primaryKey = 'idAdherent';
    public $timestamps = false;
 
    protected $fillable = ['diplôme','annéeExp','idAdherent' ];

    public function ADHERENT(){
        return $this->hasOne(Adherent::class,'idAdherent');
    }
    
    public function REUNION(){
        return $this->belongsToMany('App\Models\Reunion','Convoquer','idAdherent','idReunion');
    }

    public function Remplacement(){
        return $this->belongsToMany('App\Models\Vigneron','Remplacer','idAdherent','idAdherent_1')->withPivot('jourRemplacement');

    }

    public function EVENEMENT(){
        return $this->belongsToMany('App\Models\Evenement','Animer','idAdherent','idEvenement');
    }

    public function SEANCE(){
        return $this->hasMany('App\Models\Seance','idAdherent');
    }
}
