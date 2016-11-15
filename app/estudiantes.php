<?php

namespace Dojo;

use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    protected $table='estudiantes';
    protected $fillable = [
        'name','apellido','cedula','direccion','kyu',
    ];

    public function representante()
    {
        return $this->hasOne('Dojo\estudiante_representantes');
    }
    public function scopeName($query,$name)
    {
        if (trim($name)!="")
        {
            $query->where(\DB::raw("CONCAT(name,'',apellido)"),"LIKE","%$name%");
        }

    }
}