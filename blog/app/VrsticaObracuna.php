<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VrsticaObracuna extends Model
{
    protected $fillable = [
        'VRSTICA_OBRACUNA_ID',
        'DATUM_REALIZACIJE',
        'DATUM_VPISA',
        'DELAVEC_ID',
        'DELOVNI_NALOG_ID',
        'STEVILO_OPERACIJ',
        'MINUT_DELA',
        'MINUT_NENORMIRANO',
        'MINUT_ZASTOJ'
    ];

    protected $table = 'VrsticaObracuna';
    protected $primaryKey = 'IPS';
    public $timestamps = false;
}