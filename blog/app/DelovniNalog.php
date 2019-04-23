<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DelovniNalog extends Model
{
    protected $fillable = [
        'DELOVNI_NALOG_ID',
        'KUPEC_ID',
        'OPERACIJA_ID',
        'STEVILO_OPERACIJ',
        'DATUM_LANSIRANJA',
        'STATUS_DN',
    ];

    protected $table = 'delovni_nalog';
    public $timestamps = false;
}