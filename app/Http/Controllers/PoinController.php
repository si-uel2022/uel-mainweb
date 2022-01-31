<?php

namespace App\Http\Controllers;

use App\Models\Poin_PUBG;
use App\Models\Poin_ML;
use App\Models\Poin_Valorant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('poin.cabang');
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

    public function bukaCabang_ML()
    {
        $tim = DB::table('poin_ml')
            ->get();
        // dd($tim);
        return view('poin.updatepoinML', compact('tim'));
    }

    public function bukaCabang_PUBG()
    {
        $tim = DB::table('poin_pubg')
            ->where('week', '=', "1")
            ->where('day', '=', "1")
            ->get();
        return view('poin.updatepoinPUBG', compact('tim'));
    }

    public function bukaCabang_Valorant()
    {
        return view('poin.updatepoinValorant');
    }

    public function match_PUBG(Request $request)
    {
        $tim = DB::table('poin_pubg')
            ->where('week', '=', $request->week)
            ->where('day', '=', $request->day)
            ->get();
        // return view('poin.updatepoinPUBG', compact('tim'));
        return response()->json(
            array(
                'status' => 'oke',
                'tim' => $tim
            ),
            200
        );
    }

    public function match_ML(Request $request)
    {
        $tim = DB::table('poin_ml')
            ->where('grup', '=', $request->grup)
            ->get();
        return response()->json(
            array(
                'status' => 'oke',
                'tim' => $tim
            ),
            200
        );
    }

    public function updatePoin_ML(Request $request)
    {
        $id = $request->id_tim;
        $tim = Poin_ML::find($id);
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('poin.updatepoinmodalML', compact('tim'))->render()
        ), 200);
    }

    public function updatePoin_PUBG(Request $request)
    {
        $week = $request->week;
        $day = $request->day;
        $id = $request->id_tim;

        // $tim = DB::table('poin_pubg')
        //     ->where('id', '=', $id)
        //     ->where('week', '=', $week)
        //     ->where('day', '=', $day)
        //     ->get();

        $tim = Poin_PUBG::find($id);
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('poin.updatepoinmodalPUBG', compact('tim'))->render()
        ), 200);
    }

    public function simpanPoin_ML(Request $request)
    {
        $id = $request->id_tim;
        $game = $request->game;
        $win = $request->win;
        $lose = $request->lose;
        $point = $request->point;
        $timkill = $request->timkill;

        $tim = DB::table('poin_ml')
            ->where('id', '=', $id)
            ->update([
                'game' => $game,
                'win' => $win,
                'lose' => $lose,
                'point' => $point,
                'tim_kill' => $timkill,
            ]);

        return response()->json(array(
            'status' => 'sukses',
            'msg' => 'Sukses update point.'
        ), 200);
    }

    public function simpanPoin_PUBG(Request $request)
    {
        $id = $request->id_tim;
        $placementpoint = $request->placementpoint;
        $killpoint = $request->killpoint;
        $totalpoint = $request->totalpoint;
        $wwcdpoint = $request->wwcdpoint;

        $tim = DB::table('poin_pubg')
            ->where('id', '=', $request->id_tim)
            ->update([
                'placement_poin' => $placementpoint,
                'kill_poin' => $killpoint,
                'total_poin' => $totalpoint,
                'wwcd' => $wwcdpoint,
            ]);

        return response()->json(array(
            'status' => 'sukses',
            'msg' => 'Sukses update point.'
        ), 200);
    }

    public function simpanPoin_Valorant(Request $request)
    {
        $urutan = DB::table('poin_valorant')
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->get();

        foreach($urutan as $u)
        {
            $nomor = $u->id;
        }

        // dd($nomor);

        $poin = new Poin_Valorant();

        $logoExt = $request->file('inpBracket')->getClientOriginalExtension();
            $namaFile = 'MatchValo_'.$nomor.".".$logoExt;
            $path = $request->file('inpBracket')->move('file_match', $namaFile);
            $poin->bracket = $namaFile;
        $poin->save();

        return redirect()->back()->with('success', 'Update Valorant Berhasil!');
    }
}