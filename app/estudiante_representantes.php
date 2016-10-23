<?php

namespace Dojo;

use Illuminate\Database\Eloquent\Model;

class estudiante_representantes extends Model
{
    protected $table='estudiante_representantes';
    protected $fillable = [
        'name1','estudiante_id',
    ];
    public function estudiantes()
    {
        return $this->belongsTo('Dojo\estudiantes');
    }
}