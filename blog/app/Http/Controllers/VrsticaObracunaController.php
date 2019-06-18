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
        $vrstice_obracunov = VrsticaObracuna::all()->toArray();
        return view('vrsticaObracuna.index', compact('vrstice_obracunov'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vrstice_obracunov = VrsticaObracuna::all()->toArray();
        return view('vrsticaObracuna.create', compact('vrstice_obracunov'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $izdelekid = rand(0, 100000);
        // tole je workaround, ker DELAVEC_ID ni nastavljen na npr. AUTO_INCREMENT
           $vrstice_obracunov = new VrsticaObracuna([
            'VRSTICA_OBRACUNA_ID' => $request->get('VRSTICA_OBRACUNA_ID'),
            'DATUM_REALIZACIJE' => $request->get('DATUM_REALIZACIJE'),
            'DATUM_VPISA' => $request->get('DATUM_VPISA'),
            'DELAVEC_ID' => $request->get('DELAVEC_ID'),
            'DELOVNI_NALOG_ID' => $request->get('DELOVNI_NALOG_ID'),
            'STEVILO_OPERACIJ' => $request->get('STEVILO_OPERACIJ'),
            'MINUT_DELA' => $request->get('MINUT_DELA'),
            'MINUT_NENORMIRANO' => $request->get('MINUT_NENORMIRANO'),
            'MINUT_ZASTOJ' => $request->get('MINUT_ZASTOJ'),

        ]);
        $izdelek->save();
        return redirect()->route('izdelek.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function show($id)
    {
        $izdelek = Izdelek::where('IPS', $id)->firstOrFail();
        $struktura = Struktura::find($id);
        //print_r($operacija);
        return view('struktura.show', compact('izdelek', 'struktura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
