<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perilaku;

class PerilakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['perilaku'] = Perilaku::orderBy('id', 'desc')->paginate(5);
        return view('kkp.perilaku.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kkp.perilaku.create');
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
        $perilaku = new Perilaku;
        $perilaku->nama = $request->nama;
        $perilaku->nip = $request->nip;
        $perilaku->jabatan = $request->jabatan;
        $perilaku->save();
        return redirect()->route('kkp.perilaku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perilaku $perilaku)
    {
        return view('kkp.perilaku.show', compact('perilaku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perilaku $perilaku)
    {
        return view('kkp.perilaku.edit', compact('perilaku'));
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
        $perilaku = Perilaku::find($id);
        $perilaku->nama = $request->nama;
        $perilaku->nip = $request->nip;
        $perilaku->jabatan = $request->jabatan;
        $perilaku->save();
        return redirect()->route('kkp.perilaku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perilaku $perilaku)
    {
        $perilaku->delete();
        return redirect()->route('kkp.perilaku.index');
    }
}
