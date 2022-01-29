<?php

namespace App\Http\Controllers;

use App\Models\Poin_PUBG;
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

    public function bukaCabang($cabang)
    {
        $tim = DB::table('poin')
            ->where('cabang', '=', $cabang)
            ->get();
        // dd($tim);
        return view('poin.updatepoin', compact('tim', 'cabang'));
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

    public function updatePoin(Request $request)
    {

        $tim = DB::table('poin')
            ->where('id', '=', $request->id_tim)
            ->update(['poin' => $request->poin]);

        return response()->json(array(
            'status' => 'oke',
            'msg' => 'Berhasil update poin.'
        ), 200);
    }

    public function updatePoin_ML(Request $request)
    {

        $tim = DB::table('poin')
            ->where('id', '=', $request->id_tim)
            ->update(['poin' => $request->poin]);

        return response()->json(array(
            'status' => 'oke',
            'msg' => 'Berhasil update poin.'
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
            'msg'=>view('poin.updatepoinmodalPUBG', compact('tim'))->render()
        ),200);
    }

    public function getDataFirst_ML(Request $request)
    {
        $id = $request->id_tim;

        return response()->json(array(
            'status' => 'oke',
            'msg' => view('poin.updatepoinmodalML', compact('id'))->render()
        ), 200);
    }

    public function getDataFirst_PUBG(Request $request)
    {
        $id = $request->id_tim;

        return response()->json(array(
            'status' => 'oke',
            'msg' => view('poin.updatepoinmodalPUBG', compact('id'))->render()
        ), 200);
    }

    // public function simpanPoin_ML(Request $request){
    //     $id = $request->id_user;
    //     $result = $request->result;
    //     $poin = $request->poin;
    //     $timkill = $request->timkill;

    //     $tim = DB::table('poin')
    //             ->where('id', '=', $request->id_tim)
    //             ->update(['poin' => $request->poin]);

    //     $employee = User::find($id);
    //     $employee->name = $name;
    //     $employee->email = $email;
    //     $employee->save();

    //     return response()->json(array(
    //         'status' => 'sukses',
    //         'msg'=> 'Successfully edit employee data'
    //     ),200);
    // }
}
