<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variables_formato extends Model
{
    use HasFactory;

    protected $fillable = [

        'tipo_variable',
        'tipo_formato',
        'descr_formato'

    ];


    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('tipo_variable', '=', $this->getAttribute('tipo_variable'))
            ->where('tipo_formato', '=', $this->getAttribute('tipo_formato'));

        return $query;
    }


    protected $primaryKey = ['tipo_variable', 'tipo_formato'];
    public $incrementing = false;
    public $timestamps=false;

}
