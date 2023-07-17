<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    use HasFactory;

    protected $fillable = [


        'radminuta',
        'cod_minuta',
        'id_inmueble',
        'tipo_inmueble',
        'ident_inmueble',
        'dir_inmueble',
        'ciu_inmueble',
        'matr_inmueble',
        'ced_inmueble',
        'area_inmueble',
        'linesp_inmueble',
        'afect_viv_vend',
        'afect_doc_vend',
        'afect_viv_comp',
        'afect_doc_comp',
        'tipodoc_trad',
        'tipo_adq',
        'nombre_adq',
        'nro_escritura',
        'fec_escritura',
        'not_escritura',
        'nom_juzgado',
        'ciu_notaria',
        'ciu_registro',
        'regimen_phoriz',
        'empresa_phoriz',
        'nro_escr_phoriz',
        'fec_escr_phoriz',
        'not_escr_phoriz',
        'ciu_not_phoriz',
        'lingen_inmueble',
        'coef_inmueble',
        'admin_docum',
        'fec_protocoliz',
        'fec_expedicion',
        'vlr_inmueble',
        'req_cancel',
        'created_by',
        'date_created',
        'modified_by',
        'date_modified'


    ];

    protected $primaryKey = 'cod_minuta';
    public $timestamps=false;
}
