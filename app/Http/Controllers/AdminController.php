<?php

namespace App\Http\Controllers;

use App\Models\ML;
use App\Models\PUBG;
use App\Models\Valorant;
use App\Models\BA;
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

    public function showBA()
    {
        $ba = BA::All();
        return view('admin.adminBA', compact('ba'));
    }

    public function showPlayerML($id)
    {
        $tim = Tim_ML::find($id);
        $player = $tim->players;
        return view('admin.timML', compact('player'));
    }

    public function showPlayerPUBG($id)
    {
        $tim = Tim_PUBG::find($id);
        $player = $tim->players;
        return view('admin.timPUBG', compact('player'));
    }

    public function showPlayerValorant($id)
    {
        $tim = Tim_Valorant::find($id);
        $player = $tim->players;
        return view('admin.timValorant', compact('player'));
    }

    public function detailPlayerML(Request $request)
    {
        $id = $request->id;
        $player = ML::find($id);

        return response()->json(array(
            'msg' => view('admin.detailModalML', compact('player'))->render()
        ),200);
    }

    public function detailPlayerPUBG(Request $request)
    {
        $id = $request->id;
        $player = PUBG::find($id);

        return response()->json(array(
            'msg' => view('admin.detailModalPUBG', compact('player'))->render()
        ),200);
    }

    public function detailPlayerValorant(Request $request)
    {
        $id = $request->id;
        $player = Valorant::find($id);

        return response()->json(array(
            'msg' => view('admin.detailModalValorant', compact('player'))->render()
        ),200);
    }

    public function detailBA(Request $request)
    {
        $id = $request->id;
        $person = BA::find($id);

        return response()->json(array(
            'msg' => view('admin.detailModalBA', compact('person'))->render()
        ),200);
    }

    public function acceptTimML(Tim_ML $tim)
    {
        $tim->status = "Accepted";
        $nama = $tim->nama;
        $tim->save();
        return redirect()->route('admin.showML')->with('status_accept', 'Accept ' . $nama);
    }

    public function rejectTimML(Tim_ML $tim)
    {
        $tim->status = "Rejected";
        $nama = $tim->nama;
        $tim->save();
        return redirect()->route('admin.showML')->with('status_reject', 'Reject ' . $nama);
    }

    public function acceptTimPUBG(Tim_PUBG $tim)
    {
        $tim->status = "Accepted";
        $nama = $tim->nama;
        $tim->save();
        return redirect()->route('admin.showPUBG')->with('status_accept', 'Accept ' . $nama);
    }

    public function rejectTimPUBG(Tim_PUBG $tim)
    {
        $tim->status = "Rejected";
        $nama = $tim->nama;
        $tim->save();
        return redirect()->route('admin.showPUBG')->with('status_reject', 'Reject ' . $nama);
    }

    public function acceptTimValorant(Tim_Valorant $tim)
    {
        $tim->status = "Accepted";
        $nama = $tim->nama;
        $tim->save();
        return redirect()->route('admin.showValorant')->with('status_accept', 'Accept ' . $nama);
    }

    public function rejectTimValorant(Tim_Valorant $tim)
    {
        $tim->status = "Rejected";
        $nama = $tim->nama;
        $tim->save();
        return redirect()->route('admin.showValorant')->with('status_reject', 'Reject ' . $nama);
    }
}
