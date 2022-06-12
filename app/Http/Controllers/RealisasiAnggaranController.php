<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RealisasiAnggaran;

class RealisasiAnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['realisasi_anggaran'] = RealisasiAnggaran::orderBy('id', 'desc')->paginate(5);
        return view('kkp.realisasi_anggaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kkp.realisasi_anggaran.create');
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
        $realisasi_anggaran = new RealisasiAnggaran;
        $realisasi_anggaran->nama = $request->nama;
        $realisasi_anggaran->nip = $request->nip;
        $realisasi_anggaran->jabatan = $request->jabatan;
        $realisasi_anggaran->save();
        return redirect()->route('kkp.realisasi_anggaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RealisasiAnggaran $realisasi_anggaran)
    {
        return view('kkp.realisasi_anggaran.show', compact('realisasi_anggaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RealisasiAnggaran $realisasi_anggaran)
    {
        return view('kkp.realisasi_anggaran.edit', compact('realisasi_anggaran'));
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
        $realisasi_anggaran = RealisasiAnggaran::find($id);
        $realisasi_anggaran->nama = $request->nama;
        $realisasi_anggaran->nip = $request->nip;
        $realisasi_anggaran->jabatan = $request->jabatan;
        return redirect()->route('kkp.realisasi_anggaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RealisasiAnggaran $realisasi_anggaran)
    {
        $realisasi_anggaran->delete();
        return redirect()->route('kkp.realisasi_anggaran.index');
    }
}
