<?php

namespace App\Http\Controllers;

use App\Models\gedunglab;
use Illuminate\Http\Request;
use App\Models\gedunglab as enter;

class GedunglabControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtgedunglab = enter::all();
        return view('gedunglab', compact('dtgedunglab'));
    }

    public function denah()
    {
        $dtgedunglab = enter::all();
        return view('denah', compact('dtgedunglab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        enter::create([
            'id' => $request->id,
            'ruang' => $request->ruang,
            'walas' => $request->walas,
            'kelas' => $request->kelas,
            'jammulai' => $request->jammulai,
            'jamakhir' => $request->jamakhir,
        ]);

        return redirect('gedunglab');
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
