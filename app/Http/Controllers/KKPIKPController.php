<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kkpikp;

class KKPIKPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ikp'] = kkpikp::orderBy('id', 'desc')->paginate(5);
        return view('kkp.ikp.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kkp.ikp.create');
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
        $ikp = new kkpikp;
        $ikp->nama = $request->nama;
        $ikp->nip = $request->nip;
        $ikp->jabatan = $request->jabatan;
        $ikp->save();
        return redirect()->route('kkp.ikp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kkpikp $ikp)
    {
        return view('kkp.ikp.show', compact('ikp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kkpikp $ikp)
    {
        return view('kkp.ikp.edit', compact('ikp'));
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
        $ikp = kkpikp::find($id);
        $ikp->nama = $request->nama;
        $ikp->nip = $request->nip;
        $ikp->jabatan = $request->jabatan;
        $ikp->save();
        return redirect()->route('kkp.ikp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kkpikp $ikp)
    {
        $ikp->delete();
        return redirect()->route('kkp.ikp.index');
    }
}
