<?php

namespace App\Http\Controllers;

use App\Models\gedunglab;
use Illuminate\Http\Request;
use App\Models\gedunglab as enter;
use App\Models\ruang;

class GedunglabControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($gedung)
    {
        $dtgedunglab = enter::with('ruang')->where('gedung', $gedung)->paginate(4);
        return view('FolderDatabase/'.$gedung, compact('dtgedunglab'));
    }
    public function index2($gedung)
    {
        $dtgedunglab = enter::all();
        $thisgedung = enter::with('ruang')->where('ruang_id', $gedung)->get();
        // dd($thisgedung);
        return view('FolderDatabase/12', compact('dtgedunglab', 'thisgedung'));
    }
    public function denah()
    {
        $dtgedunglab = enter::all();
        return view('denah', compact('dtgedunglab'));
    }
    public function omagas()
    {
        $dtgedunglab = enter::all();
        return view('12', compact('dtgedunglab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($gedung)
    {
        $dtgedunglab = ruang::all();
        return view('FolderDatabase.tambah', compact('dtgedunglab', 'gedung'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $gedung)
    {
        // dd($request->all());
        enter::create([
            'id' => $request->id,
            'walas' => $request->walas,
            'ruang_id' => $request->ruang_id,
            'kelas' => $request->kelas,
            'jammulai' => $request->jammulai,
            'jamakhir' => $request->jamakhir,
            'gedung' => $gedung
        ]);

        return redirect('/gedung/'.$gedung);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gedunglab = gedunglab::findorfail($id);
        $gedunglab->delete();
        return back();
    }
}
