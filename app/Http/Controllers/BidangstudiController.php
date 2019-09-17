<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BidangStudi;
use App\Role;
use Session; 

class BidangstudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $bidangstudi = BidangStudi::all();
        $response = [
            'success' => true,
            'data' => $bidangstudi,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
    public function index()
    {
        $bidangstudi = BidangStudi::all();

        return view('backend.bidangstudi.index', compact('bidangstudi'));
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
            'nama' => 'required|unique:bidang_studis'
        ]);

        $bidangstudi = new BidangStudi;

        $bidangstudi->nama = $request->nama;
        $bidangstudi->save();

        toastr()->success('Data berhasil ditambah!', "$bidangstudi->nama");

        return redirect()->route('bidang-studi.index');
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
            'nama' => 'required|unique:bidang_studis'
        ]);

        $bidangstudi = BidangStudi::findOrFail($request->id);

        $bidangstudi->nama = $request->nama;
        $bidangstudi->save();

        toastr()->warning('Data berhasil diubah!', "$bidangstudi->nama");

        return redirect()->route('bidang-studi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bidangstudi = BidangStudi::findOrFail($request->id);
        $old = $bidangstudi->nama;
        $bidangstudi->delete();
        
        toastr()->warning('Data berhasil dihapus!', "$old");
        
        return redirect()->route('bidang-studi.index');
    }
}