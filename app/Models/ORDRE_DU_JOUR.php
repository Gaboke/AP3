<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ORDRE_DU_JOUR extends Model
{
    use HasFactory;

    protected $table= 'ODRE_DU_JOUR';
    protected $primaryKey = 'idOrdre';
    public $timestamps = false;
 
    protected $fillable = ['idReunion','intituléOrdre' ];
    
    public function REUNION(){
        return $this->hasMany(Reunion::class,'idReunion');
    }
}
