<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delavec extends Model
{
    protected $fillable = [
        'DELAVEC_ID',
        'PRIIMEK',
        'IME',
        'MINUT_V_IZMENI',
        'MINUT_PRIZNANO_DODATNO',
        'MINUT_PREOSTALI_CAS',
        'UPORABNISKO_IME',
        'GESLO',
        'VODJA_ID'
    ];

    protected $table = 'delavec';
    public $timestamps = false;
}