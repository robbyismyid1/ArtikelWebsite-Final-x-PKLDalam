<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KompetensiKeahlian;
use App\BidangStudi;

class KompetensikeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $kompetensikeahlian = KompetensiKeahlian::all();
        $response = [
            'success' => true,
            'data' => $kompetensikeahlian,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
    public function index()
    {
        $kompetensikeahlian = KompetensiKeahlian::all();
        $bidangstudi = BidangStudi::all();

        return view('backend.kompetensikeahlian.index', compact('kompetensikeahlian', 'bidangstudi'));
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
            'nama' => 'required|unique:kompetensi_keahlians'
        ]);

        $kompetensikeahlian = new KompetensiKeahlian;
        $kompetensikeahlian->bidang_id = $request->bidang;
        $kompetensikeahlian->nama = $request->nama;
        $kompetensikeahlian->save();

        toastr()->success('Data berhasil ditambah!', "$kompetensikeahlian->nama");

        return redirect()->route('kompetensi-keahlian.index');
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
            'nama' => 'required|unique:kompetensi_keahlians'
        ]);

        $kompetensikeahlian = KompetensiKeahlian::findOrFail($request->id);

        $kompetensikeahlian->bidang_id = $request->bidang;
        $kompetensikeahlian->nama = $request->nama;
        $kompetensikeahlian->save();

        toastr()->warning('Data berhasil diubah!', "$kompetensikeahlian->nama");

        return redirect()->route('kompetensi-keahlian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $kompetensikeahlian = KompetensiKeahlian::findOrFail($request->id);
        $old = $kompetensikeahlian->nama;
        $kompetensikeahlian->delete();
        
        toastr()->warning('Data berhasil dihapus!', "$old");
        
        return redirect()->route('kompetensi-keahlian.index');
    }
}