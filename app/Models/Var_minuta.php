<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Var_minuta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_minuta',
        'sec_var',
        'nom_var',
        'tip_var',
        'out_var',
        'tabla_var',
        'mod_var',
        'contr_var'
    ];

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('cod_minuta', '=', $this->getAttribute('cod_minuta'))
            ->where('sec_var', '=', $this->getAttribute('sec_var'));

        return $query;
    }

    protected $primaryKey = ['cod_minuta', 'sec_var'];
    public $incrementing = false;
    public $timestamps=false;
    

}
