<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Izdelek;


class KalkulacijeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $izdelki = Izdelek::all()->toArray();
        return view('kalkulacije.index', compact('izdelki'));
    }
}
