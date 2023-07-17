<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notario extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_notario',
        'nombre_notario'
    ];

    protected $primaryKey = 'id_notario';
    public $timestamps=false;
}
