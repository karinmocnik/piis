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
        $delovniNalogi = DelovniNalog::all()->toArray();
        return view('delovniNalog.index', compact('delovni_nalogi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delovniNalogi = DelovniNalog::all()->toArray();
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
        $delavecid = rand(0, 100000);
        // tole je workaround, ker DELAVEC_ID ni nastavljen na npr. AUTO_INCREMENT
        $delavec = new Delavec([
            'GESLO' => $request->get('GESLO'),
            'VODJA_ID' => $request->get('VODJA_ID'),
            'PRIIMEK' => $request->get('PRIIMEK'),
            'IME' => $request->get('IME'),
            'UPORABNISKO_IME' => $request->get('UPORABNISKO_IME'),
            'DELAVEC_ID' => $delavecid
        ]);
        $delavec->save();
        return redirect()->route('delavec.create')->with('success', 'Data Added');
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
