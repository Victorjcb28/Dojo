<?php

namespace Prueba;

use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    protected $table='estudiantes';
    protected $fillable = [
        'name',
    ];

    public function representante()
    {
        return $this->hasOne('App\estudiante_representantes');
    }
}
