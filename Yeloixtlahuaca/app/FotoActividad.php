<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoActividad extends Model
{

	protected $table = "FotosActividades";

    protected $fillable = ['ruta', 'actividad'];
    
    public function actividad()
    {
    	return $this->belongsTo(Actividad::class, 'actividad');
    }
}
