<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KKPAktivitas;

class KKPAktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['aktivitas'] = KKPAktivitas::orderBy('id', 'desc')->paginate(5);
        return view('kkp.aktivitas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kkp.aktivitas.create');
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
        $aktivitas = new KKPAktivitas;
        $aktivitas->nama = $request->nama;
        $aktivitas->nip = $request->nip;
        $aktivitas->jabatan = $request->jabatan;
        $aktivitas->save();
        return redirect()->route('kkp.aktivitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KKPAktivitas $aktiv)
    {
        return view('kkp.aktivitas.show', compact('aktiv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KKPAktivitas $aktiv)
    {
        return view('kkp.aktivitas.edit', compact('aktiv'));
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
        $aktiv = KKPAktivitas::find($id);
        $aktiv->nama = $request->nama;
        $aktiv->nip = $request->nip;
        $aktiv->jabatan = $request->jabatan;
        $aktiv->save();
        return redirect()->route('kkp.aktivitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KKPAktivitas $aktiv)
    {
        $aktiv->delete();
        return redirect()->route('kkp.aktivitas.index');
    }
}

