<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CATEGORIE extends Model
{
    use HasFactory;

    protected $table= 'CATEGORIE';
    protected $primaryKey = 'idCategorie';
    public $timestamps = false;
 
    protected $fillable = ['niveau','age' ];
    
    public function SEANCE(){
        return $this->hasMany('App\Models\Seance','idCategorie');
    }

    public function ADHERENT(){
        return $this->hasMany('App\Models\Adherent','idCategorie');
    }

    public function Evenement(){
        return $this->hasMany('App\Models\Evenement','idCategorie');
    }

}
