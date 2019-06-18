<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DelovniNalog;

class DelovniNalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delovni_nalogi = DelovniNalog::all()->toArray();
        return view('delovniNalog.index', compact('delovni_nalogi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delovni_nalogi = DelovniNalog::all()->toArray();
        return view('delovniNalog.create', compact('delovni_nalogi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$delovniNalogid = rand(0, 100000);
        // tole je workaround, ker DELAVEC_ID ni nastavljen na npr. AUTO_INCREMENT
        $delovniNalog = new DelovniNalog([
            'KUPEC_ID' => $request->get('KUPEC_ID'),
            'DELOVNI_NALOG_ID' => $request->get('DELOVNI_NALOG_ID'),
            'OPERACIJA_ID' => $request->get('OPERACIJA_ID'),
            'STEVILO_OPERACIJ' => $request->get('STEVILO_OPERACIJ'),
            'DATUM_LANSIRANJA' => $request->get('DATUM_LANSIRANJA'),
            'STATUS_DN' => $request->get('STATUS_DN'),
            //'DELOVNI_NALOG_ID' => $delovniNalogcid
        ]);
        $delovni_nalogi->save();
        return redirect()->route('delovniNalog.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
