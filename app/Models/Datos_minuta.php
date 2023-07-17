<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos_minuta extends Model
{
    use HasFactory;

    protected $fillable =[

        'rad_minuta',
        'cod_minuta',
        'secuencia_var',
        'contenido_var'
    ];
    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('rad_minuta', '=', $this->getAttribute('rad_minuta'))
            ->where('cod_minuta', '=', $this->getAttribute('cod_minuta'))
            ->where('secuencia_var', '=', $this->getAttribute('secuencia_var'));
        return $query;
    }


    protected $primaryKey = ['rad_minuta', 'cod_minuta', 'secuencia_var'];
    public $incrementing = false;
    public $timestamps=false;
}