<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_variable extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_variable',
        'descr_variable'
    ];

    public $timestamps=false;
    protected $primaryKey = 'tipo_variable';
}
