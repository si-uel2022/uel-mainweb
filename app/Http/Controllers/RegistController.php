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
        $tim_ml = new Tim_ML();
        $tim_ml->nama = $request->txtNamaTim;
        $tim_ml->status = "Proses";

        $logoExt = $request->file('inpLogoTeam')->getClientOriginalExtension();
            $namaFileLogo = 'UEL2022_Logo_'.$request->get("txtNamaTim").".".$logoExt;
            $path = $request->file('inpLogoTeam')->move('file_logo', $namaFileLogo);
            $tim_ml->logo = $namaFileLogo;
        $tim_ml->save();

        for ($i=1; $i <= 1; $i++) { 
            $player = new ML();
            $player->nama = $request->get("txtNamaPlayer".$i);
            $player->fakultas = $request->get("selFakultasPlayer".$i);
            $player->nrp = $request->get("txtNRPPlayer".$i);
            $player->angkatan = $request->get("txtAngkatanPlayer".$i);

            $player->id_line = $request->get("txtIDLinePlayer".$i);
            $player->nomor = $request->get("txtNoHPPlayer".$i);
            $player->instagram = $request->get("txtIGPlayer".$i);
            $player->nickname = $request->get("txtNicknamePlayer".$i);
            $player->id_server = $request->get("txtIDServerPlayer".$i);
            $player->hero = $request->get("txtHeroPlayer".$i);
            $player->role = $request->get("txtHeroPlayer".$i);
            $player->device = $request->get("txtDevicePlayer".$i);
            $player->sebagai = $request->get("txtSebagaiPlayer".$i);
            $player->vaksin = "url_vaksin".$i;
            $player->domisili = $request->get("txtDomisiliPlayer".$i);
            $player->ktm = "url_ktm".$i;
            $player->id_tim = $tim_ml->id;
            $player->id_fakultas = 1;
            
            $fotoExt = $request->file('inpFotoPlayer'.$i)->getClientOriginalExtension();
            $namaFileFoto = 'UEL2022_Foto_'.$request->get("txtNamaPlayer".$i).".".$fotoExt;
            $path = $request->file('inpFotoPlayer'.$i)->move('file_foto', $namaFileFoto);
            $player->foto = $namaFileFoto;

            $vaksinExt = $request->file('inpVaksinPlayer'.$i)->getClientOriginalExtension();
            $namaFileVaksin = 'UEL2022_Vaksin_'.$request->get("txtNamaPlayer".$i).".".$vaksinExt;
            $path = $request->file('inpVaksinPlayer'.$i)->move('file_vaksin', $namaFileVaksin);
            $player->vaksin = $namaFileVaksin;

            $player->save();


            $riwayat = new Riwayat_ML();
            $riwayat->keterangan = $request->get("txtRiwayatPlayer".$i);
            $riwayat->id_player = $player->id;
            $riwayat->save();
            
        }

        return back();
    }

    public function submitPUBG(Request $request)
    {
        
    }

    public function submitValorant(Request $request)
    {
        
    }
}
