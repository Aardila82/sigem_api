<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoderado extends Model
{
    use HasFactory;
    protected $fillable =[
        'rad_minuta',
        'cod_minuta',
        'suscr_id',
        'apod_tipo',
        'apod_nombre',
        'apod_tipodoc',
        'apod_nrodoc',
        'apod_ciudoc',
        'nro_escritura',
        'fec_escritura',
        'not_escritura',
        'ciu_escritura',
        
    ];

    protected $primaryKey = 'rad_minuta';
    public $timestamps=false;
}
