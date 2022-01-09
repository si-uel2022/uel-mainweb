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

            $ktmExt = $request->file('inpKTMPlayer'.$i)->getClientOriginalExtension();
            $namaFileKTM = 'UEL2022_KTM_'.$request->get("txtNamaPlayer".$i).".".$ktmExt;
            $path = $request->file('inpKTMPlayer'.$i)->move('file_ktm', $namaFileKTM);
            $player->ktm = $namaFileKTM;
            $player->save();


            $riwayat = new Riwayat_ML();
            $riwayat->keterangan = $request->get("txtRiwayatPlayer".$i);
            $riwayat->id_player = $player->id;
            $riwayat->save();
            
        }

        return redirect()->back()->with('success', 'Registrasi berhasil. Email konfirmasi akan dikirim dalam waktu 1x24 jam');
    }

    public function submitPUBG(Request $request)
    {
        $tim_pubg = new Tim_PUBG();
        $tim_pubg->nama = $request->txtNamaTim;
        $tim_pubg->status = "Proses";

        $logoExt = $request->file('inpLogoTeam')->getClientOriginalExtension();
            $namaFileLogo = 'UEL2022_Logo_'.$request->get("txtNamaTim").".".$logoExt;
            $path = $request->file('inpLogoTeam')->move('file_logo', $namaFileLogo);
            $tim_ml->logo = $namaFileLogo;
        $tim_ml->save();

        for ($i=1; $i <= 1; $i++) { 
            $player = new PUBG();
            $player->nama = $request->get("txtNamaPlayer".$i);
            $player->fakultas = $request->get("selFakultasPlayer".$i);
            $player->nrp = $request->get("txtNRPPlayer".$i);
            $player->angkatan = $request->get("txtAngkatanPlayer".$i);

            $player->id_line = $request->get("txtIDLinePlayer".$i);
            $player->nomor = $request->get("txtNoHPPlayer".$i);
            $player->instagram = $request->get("txtIGPlayer".$i);
            $player->nick_game = $request->get("txtNicknamePlayer".$i);
            $player->id_game = $request->get("txtIDGamePlayer".$i);
            $player->senjata = $request->get("txtSenjataPlayer".$i);
            $player->role = $request->get("txtRolePlayer".$i);
            $player->device = $request->get("txtDevicePlayer".$i);
            $player->sebagai = $request->get("txtSebagaiPlayer".$i);
            $player->domisili = $request->get("txtDomisiliPlayer".$i);
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

            $ktmExt = $request->file('inpKTMPlayer'.$i)->getClientOriginalExtension();
            $namaFileKTM = 'UEL2022_KTM_'.$request->get("txtNamaPlayer".$i).".".$ktmExt;
            $path = $request->file('inpKTMPlayer'.$i)->move('file_ktm', $namaFileKTM);
            $player->ktm = $namaFileKTM;
            $player->save();
            

            $riwayat = new Riwayat_PUBG();
            $riwayat->keterangan = $request->get("txtRiwayatPlayer".$i);
            $riwayat->id_player = $player->id;
            $riwayat->save();
            
        }

        return redirect()->back()->with('success', 'Registrasi berhasil. Email konfirmasi akan dikirim dalam waktu 1x24 jam');
    }

    public function submitValorant(Request $request)
    {
        $tim_valorant = new Tim_Valorant();
        $tim_valorant->nama = $request->txtNamaTim;
        $tim_valorant->status = "Proses";

        $logoExt = $request->file('inpLogoTeam')->getClientOriginalExtension();
            $namaFileLogo = 'UEL2022_Logo_'.$request->get("txtNamaTim").".".$logoExt;
            $path = $request->file('inpLogoTeam')->move('file_logo', $namaFileLogo);
            $tim_valorant->logo = $namaFileLogo;
        $tim_valorant->save();

        for ($i=1; $i <= 1; $i++) { 
            $player = new Valorant();
            $player->nama = $request->get("txtNamaPlayer".$i);
            $player->fakultas = $request->get("selFakultasPlayer".$i);
            $player->nrp = $request->get("txtNRPPlayer".$i);
            $player->angkatan = $request->get("txtAngkatanPlayer".$i);

            $player->id_line = $request->get("txtIDLinePlayer".$i);
            $player->nomor = $request->get("txtNoHPPlayer".$i);
            $player->instagram = $request->get("txtIGPlayer".$i);
            $player->nickname = $request->get("txtNicknamePlayer".$i);
            $player->tagline = $request->get("txtIDTaglinePlayer".$i);
            $player->agent = $request->get("txtAgentPlayer".$i);
            $player->role = $request->get("txtRolePlayer".$i);
            $player->sebagai = $request->get("txtSebagaiPlayer".$i);
            $player->domisili = $request->get("txtDomisiliPlayer".$i);
            $player->id_tim = $tim_valorant->id;
            $player->id_fakultas = 1;
            
            $fotoExt = $request->file('inpFotoPlayer'.$i)->getClientOriginalExtension();
            $namaFileFoto = 'UEL2022_Foto_'.$request->get("txtNamaPlayer".$i).".".$fotoExt;
            $path = $request->file('inpFotoPlayer'.$i)->move('file_foto', $namaFileFoto);
            $player->foto = $namaFileFoto;

            $vaksinExt = $request->file('inpVaksinPlayer'.$i)->getClientOriginalExtension();
            $namaFileVaksin = 'UEL2022_Vaksin_'.$request->get("txtNamaPlayer".$i).".".$vaksinExt;
            $path = $request->file('inpVaksinPlayer'.$i)->move('file_vaksin', $namaFileVaksin);
            $player->vaksin = $namaFileVaksin;

            $ktmExt = $request->file('inpKTMPlayer'.$i)->getClientOriginalExtension();
            $namaFileKTM = 'UEL2022_KTM_'.$request->get("txtNamaPlayer".$i).".".$ktmExt;
            $path = $request->file('inpKTMPlayer'.$i)->move('file_ktm', $namaFileKTM);
            $player->ktm = $namaFileKTM;
            $player->save();
            

            $riwayat = new Riwayat_Valorant();
            $riwayat->keterangan = $request->get("txtRiwayatPlayer".$i);
            $riwayat->id_player = $player->id;
            $riwayat->save();
            
        }

        return redirect()->back()->with('success', 'Registrasi berhasil. Email konfirmasi akan dikirim dalam waktu 1x24 jam');
    }
}
