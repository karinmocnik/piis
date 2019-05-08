<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Izdelek extends Model
{
    protected $fillable = [
        'IPS',
        'NAZIV',
        'PL_CENA',
        'ENM',
        'ZALOGA',
        'OZN',
        'LPE',
        'ND',
        'DATUM_ZALOG',
        'VGRAD'
    ];

    protected $table = 'izdelek';
    // protected $primaryKey = 'IPS';
    public $timestamps = false;
}