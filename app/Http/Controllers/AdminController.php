<?php

namespace App\Http\Controllers;

use App\Models\ML;
use App\Models\PUBG;
use App\Models\Valorant;
use App\Models\Tim_ML;
use App\Models\Tim_PUBG;
use App\Models\Tim_Valorant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
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

    public function showML()
    {
        $tim = Tim_ML::All();
        return view('admin.adminML', compact('tim'));
    }

    public function showPUBG()
    {
        $tim = Tim_PUBG::All();
        return view('admin.adminPUBG', compact('tim'));
    }

    public function showValorant()
    {
        $tim = Tim_Valorant::All();
        return view('admin.adminValorant', compact('tim'));
    }

    public function showPlayerML($id)
    {
        $tim = Tim_ML::find($id);
        $player = $tim->players;
        return view('admin.timML', compact('player'));
    }

    public function acceptTim(Tim_ML $tim)
    {
        $tim->status = "Accepted";
        $tim->save();
        return redirect()->route('admin');
    }

    public function rejectTim(Tim_ML $tim)
    {
        $tim->status = "Rejected";
        $tim->save();
        return redirect()->route('admin');
    }
}
