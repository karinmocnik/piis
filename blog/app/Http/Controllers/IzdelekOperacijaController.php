<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Izdelek;
use App\IzdelekOperacija;

class IzdelekOperacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $izdelki = Izdelek::all()->toArray();
        return view('izdelek_operacija.index', compact('izdelki'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $izdelki = Izdelek::all()->toArray();
        return view('izdelek_operacija.create', compact('izdelki'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $izdelekid = rand(0, 100000);
        // tole je workaround, ker DELAVEC_ID ni nastavljen na npr. AUTO_INCREMENT
        $izdelek = new Izdelek([
            'IPS' => $request->get('IPS'),
            'NAZIV' => $request->get('NAZIV'),
            'VGRAD' => $request->get('VGRAD'),
            'DATUM_ZALOG' => $request->get('DATUM_ZALOG'),
            'PL_CENA' => $request->get('PL_CENA'),
            'ENM' => $request->get('ENM'),
            'OZN' => $request->get('OZN'),
            'ZALOGA' => $request->get('ZALOGA'),
            'LPE' => $request->get('LPE'),
            'ND' => $request->get('ND'),

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
        $opercija = IzdelekOperacija::find($id);
        //print_r($operacija);
        return view('izdelek_operacija.showI', compact('izdelek', 'operacija'));
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
