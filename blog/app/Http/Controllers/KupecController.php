<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kupec;

class KupecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kupci = Kupec::all()->toArray();
        return view('kupec.index', compact('kupci'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kupci = Kupec::all()->toArray();
        return view('kupec.create', compact('kupci'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kupecid = rand(0, 100000000);
        // tole je workaround, ker DELAVEC_ID ni nastavljen na npr. AUTO_INCREMENT
        $kupec = new Kupec([
            'DDV_ID' => $request->get('DDV_ID'),
            'NAZIV' => $request->get('NAZIV'),
            'kupec_ID' => $kupecid
        ]);
        $kupec->save();
        return redirect()->route('kupec.create')->with('success', 'Data Added');
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
