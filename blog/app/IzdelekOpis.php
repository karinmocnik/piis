<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IzdelekOpis extends Model
{
    protected $fillable = [
        'Opis_izdelka_ID',
        'IPS',
        'Slika_video',
        'originalno_ime',
        'mime_type',
        'datum_kreiranja',
        'datum_zadnje_spremembe',
        'nabor_znakov'
    ];

    protected $table = 'opis_izdelka';
    protected $primaryKey = 'IPS';
    public $timestamps = false;
}