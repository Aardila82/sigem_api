<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radicacion_minuta extends Model
{
    use HasFactory;

    protected $fillable =[
        'rad_minuta',
        'cod_minuta',
        'creator_name',
        'creator_email',
        'creator_phone',
        'created_by',
        'date_created',
        'modified_by',
        'date_modified',
        'status'

    ];


    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('rad_minuta', '=', $this->getAttribute('rad_minuta'))
            ->where('cod_minuta', '=', $this->getAttribute('cod_minuta'));

        return $query;
    }

    protected $primaryKey = ['rad_minuta', 'cod_minuta'];
    public $incrementing = false;
    public $timestamps=false;
   
}
