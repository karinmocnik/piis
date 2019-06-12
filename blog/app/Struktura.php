<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktura extends Model
{
    protected $fillable = [
        'NADREJEN_DEL_ID',
        'VGRAJENI_DEL_ID',
        'KOLICINA',
    ];

    protected $table = 'struktura';
    protected $primaryKey = 'IPS';
    public $timestamps = false;
}