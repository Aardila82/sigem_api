<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_inmueble extends Model
{
    use HasFactory;

    protected $fillable = [

        'tipo_inmueble',
        'descr_inmueble'

    ];
    protected $primaryKey = 'tipo_inmueble';
    public $timestamps=false;
}
