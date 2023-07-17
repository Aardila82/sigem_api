<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
    use HasFactory;

    protected $fillable = [

        'codigo',
        'descripcion'

    ];

    protected $primaryKey = 'codigo';
    public $timestamps=false;
}
