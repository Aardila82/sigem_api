<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_suscrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_suscrito',
        'descr_suscrito',
        'singular_h',
        'singular_m',
        'plural_h',
        'plural_m'
    ];

    public $timestamps=false;
    protected $primaryKey = 'tipo_suscrito';
}
