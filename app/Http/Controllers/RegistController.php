<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use App\Models\ML;
use App\Models\PUBG;
use App\Models\Valorant;
use App\Models\Riwayat_ML;
use App\Models\Riwayat_PUBG;
use App\Models\Riwayat_Valorant;
use App\Models\Tim_ML;
use App\Models\Tim_PUBG;
use App\Models\Tim_Valorant;
class RegistController extends Controller
{
    public function showView()
    {
        $fakultas = Fakultas::get();
        return view('main.registration')->with('fakultas', $fakultas);
    }

    public function submitML(Request $request)
    {
        dd($request); 
    }

    public function submitPUBG(Request $request)
    {
        
    }

    public function submitValorant(Request $request)
    {
        
    }
}
