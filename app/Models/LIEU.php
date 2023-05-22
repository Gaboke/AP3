<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LIEU extends Model
{
    use HasFactory;

    protected $table= 'LIEU';
    protected $primaryKey = 'idLieu';
    public $timestamps = false;
 
    protected $fillable = ['lieu' ];

    public function Evenement(){
        return $this->hasMany('App\Models\Evenement','idLieu');
    }
    
}
