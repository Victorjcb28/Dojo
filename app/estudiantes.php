<?php

namespace Dojo;

use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    protected $table='estudiantes';
    protected $fillable = [
        'name',
    ];

    public function representante()
    {
        return $this->hasOne('Dojo\estudiante_representantes');
    }
}