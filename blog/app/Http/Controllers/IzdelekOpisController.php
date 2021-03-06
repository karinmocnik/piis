<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Izdelek;
use App\IzdelekOpis;

class IzdelekOpisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $izdelki = Izdelek::all()->toArray();
        return view('izdelek_opis.index', compact('izdelki'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $izdelki = Izdelek::all()->toArray();
        return view('izdelek_opis.create', compact('izdelki'));
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
            'Opis_izdelka_ID' => $request->get('Opis_izdelka_ID'),
            'IPS' => $request->get('IPS'),
            'Slika_video' => $request->get('Slika_video'),
            'originalno_ime' => $request->get('originalno_ime'),
            'mime_type' => $request->get('mime_type'),
            'datum_kreiranja' => $request->get('datum_kreiranja'),
            'datum_zadnje_spremembe' => $request->get('datum_zadnje_spremembe'),
            'nabor_znakov' => $request->get('nabor_znakov'),

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
        $opis = IzdelekOpis::find($id);
        //print_r($opis);
        return view('izdelek_opis.show', compact('izdelek', 'opis'));
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
