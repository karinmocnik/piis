<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\VrsticaObracuna;


class VrsticaObracunaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delavci = VrsticaObracuna::getNorm();
        
        return view('vrstica-obracuna', compact('delavci'));
    }
}
