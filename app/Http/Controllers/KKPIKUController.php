<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KKPIKU;

class KKPIKUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['iku'] = KKPIKU::orderBy('id', 'desc')->paginate(5);
        return view('kkp.iku.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kkp.iku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required'
        ]);
        $iku = new KKPIKU;
        $iku->nama = $request->nama;
        $iku->nip = $request->nip;
        $iku->jabatan = $request->jabatan;
        $iku->save();
        return redirect()->route('kkp.iku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KKPIKU $iku)
    {
        return view('kkp.iku.show', compact('iku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KKPIKU $iku)
    {
        return view('kkp.iku.edit', compact('iku'));
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
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required'
        ]);
        $iku = KKPIKU::find($id);
        $iku->nama = $request->nama;
        $iku->nip = $request->nip;
        $iku->jabatan = $request->jabatan;
        $iku->save();
        return redirect()->route('kkp.iku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KKPIKU $iku)
    {
        $iku->delete();
        return redirect()->route('kkp.iku.index');
    }
}
