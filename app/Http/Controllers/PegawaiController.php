<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = DB::table('employee')->get();

        return view('pegawai/index', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pegawai/create');
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
            'nisn' => 'required|size:5',
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
        ]);


        $pegawai = new Pegawai;
        $pegawai->nisn = $request->nisn;
        $pegawai->name = $request->name;
        $pegawai->gender = $request->gender;
        $pegawai->address = $request->address;


        $pegawai->save();
        return redirect('/pegawai')->with('status', 'Data berhasil ditambahkan');
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
     * @param  App\Models\Pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('/pegawai/edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  App\Models\Pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nisn' => 'required|size:5',
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
        ]);

        Pegawai::where('id', $pegawai->id)
            ->update([
                'nisn' => $request->nisn,
                'name' => $request->name,
                'gender' => $request->gender,
                'address' => $request->address,
            ]);
        return redirect('/pegawai')->with('status', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        Pegawai::destroy($pegawai->id);
        return redirect('/pegawai')->with('status', 'data berhasil dihapus');
    }
}
