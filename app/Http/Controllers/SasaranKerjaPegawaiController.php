<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SasaranKerjaPegawai;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SasaranKerjaPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['skp'] = SasaranKerjaPegawai::orderBy('id', 'desc')->paginate(5);
        $data['skp'] = User::join('skp', 'users.id', '=', 'skp.user_id')
        ->where('users.id', Auth::user()->id)
        ->get();

        return view('skp.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skp.create');
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
        $skp = new SasaranKerjaPegawai;
        $skp->nama = $request->nama;
        $skp->nip = $request->nip;
        $skp->jabatan = $request->jabatan;
        $skp->user_id = $request->user_id;
        $skp->save();
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SasaranKerjaPegawai $skp)
    {
        $data['skp'] = User::join('skp', 'users.id', '=', 'skp.user_id')
        ->where('users.id', Auth::user()->id)
        ->get();

        return view('skp.show', $data);
        // return view('skp.show', compact('skp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SasaranKerjaPegawai $skp)
    {
        return view('skp.edit', compact('skp'));
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
        $skp = SasaranKerjaPegawai::find($id);
        $skp->nama = $request->nama;
        $skp->nip = $request->nip;
        $skp->jabatan = $request->jabatan;
        $skp->user_id = $request->user_id;
        $skp->save();

        return redirect()->route('skp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SasaranKerjaPegawai $skp)
    {
        $skp->delete();
        return redirect()->route('skp.index');
    }
}
