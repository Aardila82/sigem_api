<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motivos_afect extends Model
{
    use HasFactory;

    protected $fillable = [

        'id_motivo',
        'motivo_afect'

    ];

    protected $table = 'motivos_afect';
    protected $primaryKey = 'id_motivo';
    public $timestamps=false;

}
