<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla extends Model
{
    use HasFactory;

    protected $fillable = [

        'cod_tabla',
        'nom_tabla',
        'descr_tabla'

    ];

    public $timestamps=false;
    protected $primaryKey = 'cod_tabla';
}
