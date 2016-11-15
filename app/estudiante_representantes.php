<?php

namespace Dojo;

use Illuminate\Database\Eloquent\Model;

class estudiante_representantes extends Model
{
    protected $table='estudiante_representantes';
    protected $fillable = [
        'name1','apellido1','cedula1','direccion1', 
    ];
    public function estudiantes()
    {
        return $this->belongsTo('Dojo\estudiantes');
    }
}