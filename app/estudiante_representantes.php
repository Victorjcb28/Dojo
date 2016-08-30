<?php

namespace Prueba;

use Illuminate\Database\Eloquent\Model;

class estudiante_representantes extends Model
{

    protected $table='estudiante_representantes';
    protected $fillable = [
        'name','estudiante_id'
    ];
    public function estudiantes()
    {
        return $this->belongsTo('App\estudiantes');
    }
}
