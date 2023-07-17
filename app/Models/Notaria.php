<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_notaria',
        'notaria'
    ];

    protected $primaryKey = 'id_notaria';
    public $timestamps=false;
}
