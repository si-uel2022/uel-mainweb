<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function showPoinML()
    {
        $tim1 = DB::table('poin_ml')
            ->where('grup', '=', "A")
            ->get();
        $tim2 = DB::table('poin_ml')
            ->where('grup', '=', "B")
            ->get();

        return view('coba.poinML', compact('tim1', 'tim2'));
    }

    public function showPoinValorant()
    {
        $urutan = DB::table('poin_valorant')
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->get();

        foreach($urutan as $u)
        {
            $nomor = $u->bracket;
        }

        return view('coba.poinValorant', compact('nomor'));
    }
}
