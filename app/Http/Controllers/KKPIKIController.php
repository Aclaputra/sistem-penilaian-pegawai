<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kkpiki;

class kkpikiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['iki'] = kkpiki::orderBy('id', 'desc')->paginate(5);
        return view('kkp.iki.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kkp.iki.create');
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
        $iki = new kkpiki;
        $iki->nama = $request->nama;
        $iki->nip = $request->nip;
        $iki->jabatan = $request->jabatan;
        $iki->save();
        return redirect()->route('kkp.iki.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kkpiki $iki)
    {
        return view('kkp.iki.show', compact('iki'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kkpiki $iki)
    {
        return view('kkp.iki.edit', compact('iki'));
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
        $iki = kkpiki::find($id);
        $iki->nama = $request->nama;
        $iki->nip = $request->nip;
        $iki->jabatan = $request->jabatan;
        $iki->save();
        return redirect()->route('kkp.iki.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kkpiki $iki)
    {
        $iki->delete();
        return redirect()->route('kkp.iki.index');
    }
}
