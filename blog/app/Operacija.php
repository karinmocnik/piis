<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operacija extends Model
{
    protected $fillable = [
        'OPERACIJA_ID',
        'NAZIV_OPERACIJE',
        'MINUT_ZA_KOS',
        'OPOMBA1',
        'OPOMBA2',
    ];

    protected $table = 'operacija';
    public $timestamps = false;
}