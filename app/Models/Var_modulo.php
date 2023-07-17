<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Var_modulo extends Model
{
    use HasFactory;

    protected $fillable = [

        'id_modulo',
        'nom_modulo',
        'var_modulo'

    ];

    public $timestamps=false;
    protected $primaryKey = 'id_modulo';
}
