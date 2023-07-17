<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $fillable =[

        'rad_minuta',
        'cod_minuta',
        'nro_escritura',
        'fec_escritura',
        'nro_hojas',
        'vlr_acto1',
        'vlr_acto2',
        'vlr_acto3',
        'vlr_acto4',
        'mayor_avaluo',
        'por_clausula',
        'vlr_clausula',
        'txt_clausula',
        'nro_resolucion',
        'ano_resolucion',
        'vlr_derechos',
        'vlr_retefuente',
        'vlr_aportes',
        'fecha_firma',
        'hora_firma',
        'notaria_firma',
        'ciudad_firma',
        'notario_firma',
        'txt_designacion',
        'imp_consumo',
        'imp_renta'

    ];

    
   protected $table = 'general';
   protected $primaryKey = 'cod_minuta';
   public $timestamps=false;
}
