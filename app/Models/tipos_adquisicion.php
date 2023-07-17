<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_adquisicion extends Model
{
    use HasFactory;

    protected $fillable = [

        'tipo_adq',
        'descr_adq'

    ];

    protected $table = 'tipos_adquisicion';
    protected $primaryKey = 'tipo_inmueble';
    public $timestamps=false;
}
