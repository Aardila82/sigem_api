<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Texto_minuta extends Model
{
    use HasFactory;

    protected $fillable =[
        'cod_minuta',
        'titulo_minuta',
        'nro_variables',
        'texto_minuta',
        'tipo_rad',
        'created_by',
        'date_created',
        'modified_by',
        'date_modified',
        'estado_minuta',
        'permissions'
    ];

    protected $primaryKey = 'cod_minuta';
    public $timestamps=false;
}
