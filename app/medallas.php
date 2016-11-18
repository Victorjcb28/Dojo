<?php

namespace Dojo;

use Illuminate\Database\Eloquent\Model;

class medallas extends Model
{
    protected $table='medallas';
    protected $fillable = [
        'oro','pLata','bronce',
    ];

    public function estudiantes()
    {
        return $this->belongsTo('Dojo\estudiantes');
    }
}
