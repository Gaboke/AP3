<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TARIF extends Model
{
    use HasFactory;

    protected $table= 'TARIF';
    protected $primaryKey = 'idTarif';
    public $timestamps = false;
 
    protected $fillable = ['Tarif' ];
    
    public function ADHERENT(){
        return $this->hasMany('App\Models\Adherent','idTarif');
    }
}
