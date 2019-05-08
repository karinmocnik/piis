<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\IzpolnjevanjeNorme;


class IzpolnjevanjeNormeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delavci = IzpolnjevanjeNorme::getNorm();
        
        return view('izpolnjevanje-norme', compact('delavci'));
    }
}
