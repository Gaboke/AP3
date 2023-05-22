<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class REUNION extends Model
{
    use HasFactory;

    protected $table= 'REUNION';
    protected $primaryKey = 'idReunion';
    public $timestamps = false;
 
    protected $fillable = ['dateReunion','objet' ];

    public function VIGNERON(){
        return $this->belongsToMany('App\Models\VIGNERON','Convoquer','idReunion','idAdherent');
    }
    
    
    public function ORDRE_DU_JOUR(){
        return $this->hasMany('App\Models\ORDRE_DU_JOUR','idReunion');
    }
}
