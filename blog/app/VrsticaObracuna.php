<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VrsticaObracuna extends Model
{
    // 
    static public function getNorm() {
        $sql = DB::select("select DELAVEC_ID, PRIIMEK, IME, F_IZRACUN_NORME(DELAVEC_ID, '2015-11-01', '2015-11-30') AS NORMA FROM DELAVEC;"); 
        $delavci = json_decode(json_encode($sql), true);
        return $delavci;
    }
 
}