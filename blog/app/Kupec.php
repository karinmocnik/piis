<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupec extends Model
{
    protected $fillable = [
        'KUPEC_ID',
        'NAZIV',
        'DDV_ID'
    ];

    protected $table = 'kupec';
    public $timestamps = false;
}