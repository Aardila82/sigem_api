<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'rad_minuta',
        'cod_minuta',
        'suscr_id',
        'suscr_tipo',
        'suscr_pers',
        'suscr_razon',
        'suscr_nit',
        'suscr_direccion',
        'suscr_domicilio',
        'suscr_nombre',
        'suscr_tipodoc',
        'suscr_nrodoc',
        'suscr_ciudoc',
        'suscr_sexo',
        'suscr_estcivil',
        'suscr_nac',
        'suscr_nrocel',
        'suscr_email',
        'suscr_ocupacion',
        'created_by',
        'date_created',
        'modified_by',
        'date_modified'
    ];
    public $timestamps=false;
    protected $primaryKey = 'rad_minuta';
}
