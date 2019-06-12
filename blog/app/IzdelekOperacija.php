<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IzdelekOperacija extends Model
{
    protected $fillable = [
        'IZDELEK_ID',
        'OPERACIJA_ID',
        'ZAPOREDJE',
    ];

    protected $table = 'izdelek_operacija';
    protected $primaryKey = 'IPS';
    public $timestamps = false;
}