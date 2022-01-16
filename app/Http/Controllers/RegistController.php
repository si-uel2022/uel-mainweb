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
use App\Models\BrandAmbassador;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSubmit;
use App\Mail\EmailSubmitBA;
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
        $tim_ml->email = $request->get("txtEmailOfficial");

        $logoExt = $request->file('inpLogoTeam')->getClientOriginalExtension();
            $namaFileLogo = 'UEL2022_Logo_'.$request->get("txtNamaTim").".".$logoExt;
            $path = $request->file('inpLogoTeam')->move('file_logo', $namaFileLogo);
            $tim_ml->logo = $namaFileLogo;
        $tim_ml->save();

        for ($i=1; $i <= 6; $i++) { 
            if(!empty($request->get("txtNamaPlayer".$i)))
            {
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
                $path = $request->file('inpFotoPlayer'.$i)->move('file_foto/'.$request->get("txtNamaTim")."/", $namaFileFoto);
                $player->foto = $namaFileFoto;
    
                $vaksinExt = $request->file('inpVaksinPlayer'.$i)->getClientOriginalExtension();
                $namaFileVaksin = 'UEL2022_Vaksin_'.$request->get("txtNamaPlayer".$i).".".$vaksinExt;
                $path = $request->file('inpVaksinPlayer'.$i)->move('file_vaksin/'.$request->get("txtNamaTim")."/", $namaFileVaksin);
                $player->vaksin = $namaFileVaksin;
    
                $ktmExt = $request->file('inpKTMPlayer'.$i)->getClientOriginalExtension();
                $namaFileKTM = 'UEL2022_KTM_'.$request->get("txtNamaPlayer".$i).".".$ktmExt;
                $path = $request->file('inpKTMPlayer'.$i)->move('file_ktm/'.$request->get("txtNamaTim")."/", $namaFileKTM);
                $player->ktm = $namaFileKTM;
                $player->save();
                
    
                $riwayat = new Riwayat_ML();
                $riwayat->keterangan = $request->get("txtRiwayatPlayer".$i);
                $riwayat->id_player = $player->id;
                $riwayat->save();
            }
            
            
        }

        //Official
        $official = new ML();
        $official->nama = $request->get("txtNamaOfficial");
        $official->fakultas = $request->get("selFakultasOfficial");
        $official->nrp = $request->get("txtNRPOfficial");
        $official->angkatan = $request->get("txtAngkatanOfficial");

        $official->id_line = $request->get("txtIDLineOfficial");
        $official->nomor = $request->get("txtNoHPOfficial");
        $official->instagram = $request->get("txtIGOfficial");
        $official->sebagai = $request->get("txtSebagaiOfficial");
        $official->domisili = $request->get("txtDomisiliOfficial");
        $official->id_tim = $tim_ml->id;
        $official->id_fakultas = 1;

        $fotoExt = $request->file('inpFotoOfficial')->getClientOriginalExtension();
        $namaFileFoto = 'UEL2022_Foto_Official_'.$request->get("txtNamaOfficial").".".$fotoExt;
        $path = $request->file('inpFotoOfficial')->move('file_foto/'.$request->get("txtNamaTim")."/", $namaFileFoto);
        $official->foto = $namaFileFoto;

        $vaksinExt = $request->file('inpVaksinOfficial')->getClientOriginalExtension();
        $namaFileVaksin = 'UEL2022_Vaksin_Official_'.$request->get("txtNamaOfficial").".".$vaksinExt;
        $path = $request->file('inpVaksinOfficial')->move('file_vaksin/'.$request->get("txtNamaTim")."/", $namaFileVaksin);
        $official->vaksin = $namaFileVaksin;

        $ktmExt = $request->file('inpKTMOfficial')->getClientOriginalExtension();
        $namaFileKTM = 'UEL2022_KTM_Official_'.$request->get("txtNamaOfficial").".".$ktmExt;
        $path = $request->file('inpKTMOfficial')->move('file_ktm/'.$request->get("txtNamaTim")."/", $namaFileKTM);
        $official->ktm = $namaFileKTM;
        $official->save();

        Mail::to($request->get('txtEmailOfficial'))->send(new EmailSubmit($request->get('txtNamaTim')));
        Mail::to('sekretuel@gmail.com')->send(new EmailSubmit($request->get('txtNamaTim')));
        return redirect()->back()->with('success', 'Registrasi berhasil. Email konfirmasi akan dikirim dalam waktu 1x24 jam. Apabila tidak mendapatkan email, mohon melakukan konfirmasi pada email si.uel2022@gmail.com');
    }

    public function tambahanML(Request $request)
    { 
        $fakultas = Fakultas::get();
        if(!empty($request->get("txtNamaPlayer")))
        {
            $tim_id = $request->get("txtTim");

            $player = new ML();
            $player->nama = $request->get("txtNamaPlayer");
            $player->fakultas = $request->get("selFakultasPlayer");
            $player->nrp = $request->get("txtNRPPlayer");
            $player->angkatan = $request->get("txtAngkatanPlayer");

            $player->id_line = $request->get("txtIDLinePlayer");
            $player->nomor = $request->get("txtNoHPPlayer");
            $player->instagram = $request->get("txtIGPlayer");
            $player->nickname = $request->get("txtNicknamePlayer");
            $player->id_server = $request->get("txtIDServerPlayer");
            $player->hero = $request->get("txtHeroPlayer");
            $player->role = $request->get("txtRolePlayer");
            $player->device = $request->get("txtDevicePlayer");
            $player->sebagai = $request->get("txtSebagaiPlayer");
            $player->vaksin = "url_vaksin";
            $player->domisili = $request->get("txtDomisiliPlayer");
            $player->ktm = "url_ktm";
            $player->id_tim = $tim_id;
            $player->id_fakultas = 1;

            $fotoExt = $request->file('inpFotoPlayer')->getClientOriginalExtension();
            $namaFileFoto = 'UEL2022_Foto_' . $request->get("txtNamaPlayer") . "." . $fotoExt;
            $path = $request->file('inpFotoPlayer')->move('file_foto/' . $request->get("txtNamaTim") . "/", $namaFileFoto);
            $player->foto = $namaFileFoto;

            $vaksinExt = $request->file('inpVaksinPlayer')->getClientOriginalExtension();
            $namaFileVaksin = 'UEL2022_Vaksin_' . $request->get("txtNamaPlayer") . "." . $vaksinExt;
            $path = $request->file('inpVaksinPlayer')->move('file_vaksin/' . $request->get("txtNamaTim") . "/", $namaFileVaksin);
            $player->vaksin = $namaFileVaksin;

            $ktmExt = $request->file('inpKTMPlayer')->getClientOriginalExtension();
            $namaFileKTM = 'UEL2022_KTM_' . $request->get("txtNamaPlayer") . "." . $ktmExt;
            $path = $request->file('inpKTMPlayer')->move('file_ktm/' . $request->get("txtNamaTim") . "/", $namaFileKTM);
            $player->ktm = $namaFileKTM;
            $player->save();


            $riwayat = new Riwayat_ML();
            $riwayat->keterangan = $request->get("txtRiwayatPlayer");
            $riwayat->id_player = $player->id;
            $riwayat->save();
        }
        
        return redirect()->route('registration')->with('success', 'Registrasi berhasil. Email konfirmasi akan dikirim dalam waktu 1x24 jam. Apabila tidak mendapatkan email, mohon melakukan konfirmasi pada email si.uel2022@gmail.com');
    }

    public function submitPUBG(Request $request)
    {
        $fakultas = Fakultas::get();
        $tim_pubg = new Tim_PUBG();
        $tim_pubg->nama = $request->txtNamaTim;
        $tim_pubg->status = "Proses";
        $tim_pubg->email = $request->get("txtEmailOfficial");
        $logoExt = $request->file('inpLogoTeam')->getClientOriginalExtension();
            $namaFileLogo = 'UEL2022_Logo_'.$request->get("txtNamaTim").".".$logoExt;
            $path = $request->file('inpLogoTeam')->move('file_logo', $namaFileLogo);
            $tim_pubg->logo = $namaFileLogo;
        $tim_pubg->save();

        for ($i=1; $i <= 5; $i++) { 
            if(!empty($request->get("txtNamaPlayer".$i)))
            {
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
                $player->id_tim = $tim_pubg->id;
                $player->id_fakultas = 1;
                
                $fotoExt = $request->file('inpFotoPlayer'.$i)->getClientOriginalExtension();
                $namaFileFoto = 'UEL2022_Foto_'.$request->get("txtNamaPlayer".$i).".".$fotoExt;
                $path = $request->file('inpFotoPlayer'.$i)->move('file_foto/'.$request->get("txtNamaTim")."/", $namaFileFoto);
                $player->foto = $namaFileFoto;
    
                $vaksinExt = $request->file('inpVaksinPlayer'.$i)->getClientOriginalExtension();
                $namaFileVaksin = 'UEL2022_Vaksin_'.$request->get("txtNamaPlayer".$i).".".$vaksinExt;
                $path = $request->file('inpVaksinPlayer'.$i)->move('file_vaksin/'.$request->get("txtNamaTim")."/", $namaFileVaksin);
                $player->vaksin = $namaFileVaksin;
    
                $ktmExt = $request->file('inpKTMPlayer'.$i)->getClientOriginalExtension();
                $namaFileKTM = 'UEL2022_KTM_'.$request->get("txtNamaPlayer".$i).".".$ktmExt;
                $path = $request->file('inpKTMPlayer'.$i)->move('file_ktm/'.$request->get("txtNamaTim")."/", $namaFileKTM);
                $player->ktm = $namaFileKTM;
                $player->save();
                
    
                $riwayat = new Riwayat_PUBG();
                $riwayat->keterangan = $request->get("txtRiwayatPlayer".$i);
                $riwayat->id_player = $player->id;
                $riwayat->save();
            }
            
        }

        //Official
        $official = new PUBG();
        $official->nama = $request->get("txtNamaOfficial");
        $official->fakultas = $request->get("selFakultasOfficial");
        $official->nrp = $request->get("txtNRPOfficial");
        $official->angkatan = $request->get("txtAngkatanOfficial");

        $official->id_line = $request->get("txtIDLineOfficial");
        $official->nomor = $request->get("txtNoHPOfficial");
        $official->instagram = $request->get("txtIGOfficial");
        $official->sebagai = $request->get("txtSebagaiOfficial");
        $official->domisili = $request->get("txtDomisiliOfficial");
        $official->id_tim = $tim_pubg->id;
        $official->id_fakultas = 1;

        $fotoExt = $request->file('inpFotoOfficial')->getClientOriginalExtension();
        $namaFileFoto = 'UEL2022_Foto_Official_'.$request->get("txtNamaOfficial").".".$fotoExt;
        $path = $request->file('inpFotoOfficial')->move('file_foto/'.$request->get("txtNamaTim")."/", $namaFileFoto);
        $official->foto = $namaFileFoto;

        $vaksinExt = $request->file('inpVaksinOfficial')->getClientOriginalExtension();
        $namaFileVaksin = 'UEL2022_Vaksin_Official_'.$request->get("txtNamaOfficial").".".$vaksinExt;
        $path = $request->file('inpVaksinOfficial')->move('file_vaksin/'.$request->get("txtNamaTim")."/", $namaFileVaksin);
        $official->vaksin = $namaFileVaksin;

        $ktmExt = $request->file('inpKTMOfficial')->getClientOriginalExtension();
        $namaFileKTM = 'UEL2022_KTM_Official_'.$request->get("txtNamaOfficial").".".$ktmExt;
        $path = $request->file('inpKTMOfficial')->move('file_ktm/'.$request->get("txtNamaTim")."/", $namaFileKTM);
        $official->ktm = $namaFileKTM;
        $official->save();

        $tim =  $tim_pubg->id;
        $namaTim = $request->txtNamaTim;

        Mail::to($request->get('txtEmailOfficial'))->send(new EmailSubmit($request->get('txtNamaTim')));
        // Mail::to('sekretuel@gmail.com')->send(new EmailSubmit($request->get('txtNamaTim')));
        return view('main.tambahanPUBG', compact('fakultas', 'tim', 'namaTim'));
        
    }

    public function tambahanPUBG(Request $request)
    {
        if(!empty($request->get("txtNamaPlayer")))
        {
            $tim_id = $request->get("txtTim");

            $player = new PUBG();
                $player->nama = $request->get("txtNamaPlayer");
                $player->fakultas = $request->get("selFakultasPlayer");
                $player->nrp = $request->get("txtNRPPlayer");
                $player->angkatan = $request->get("txtAngkatanPlayer");
    
                $player->id_line = $request->get("txtIDLinePlayer");
                $player->nomor = $request->get("txtNoHPPlayer");
                $player->instagram = $request->get("txtIGPlayer");
                $player->nick_game = $request->get("txtNicknamePlayer");
                $player->id_game = $request->get("txtIDGamePlayer");
                $player->senjata = $request->get("txtSenjataPlayer");
                $player->role = $request->get("txtRolePlayer");
                $player->device = $request->get("txtDevicePlayer");
                $player->sebagai = $request->get("txtSebagaiPlayer");
                $player->domisili = $request->get("txtDomisiliPlayer");
                $player->id_tim = $tim_id;
                $player->id_fakultas = 1;
                
                $fotoExt = $request->file('inpFotoPlayer')->getClientOriginalExtension();
                $namaFileFoto = 'UEL2022_Foto_'.$request->get("txtNamaPlayer").".".$fotoExt;
                $path = $request->file('inpFotoPlayer')->move('file_foto/'.$request->get("txtNamaTim")."/", $namaFileFoto);
                $player->foto = $namaFileFoto;
    
                $vaksinExt = $request->file('inpVaksinPlayer')->getClientOriginalExtension();
                $namaFileVaksin = 'UEL2022_Vaksin_'.$request->get("txtNamaPlayer").".".$vaksinExt;
                $path = $request->file('inpVaksinPlayer')->move('file_vaksin/'.$request->get("txtNamaTim")."/", $namaFileVaksin);
                $player->vaksin = $namaFileVaksin;
    
                $ktmExt = $request->file('inpKTMPlayer')->getClientOriginalExtension();
                $namaFileKTM = 'UEL2022_KTM_'.$request->get("txtNamaPlayer").".".$ktmExt;
                $path = $request->file('inpKTMPlayer')->move('file_ktm/'.$request->get("txtNamaTim")."/", $namaFileKTM);
                $player->ktm = $namaFileKTM;
                $player->save();
                
    
                $riwayat = new Riwayat_PUBG();
                $riwayat->keterangan = $request->get("txtRiwayatPlayer");
                $riwayat->id_player = $player->id;
                $riwayat->save();
        }
        
        return redirect()->route('registration')->with('success', 'Registrasi berhasil. Email konfirmasi akan dikirim dalam waktu 1x24 jam. Apabila tidak mendapatkan email, mohon melakukan konfirmasi pada email si.uel2022@gmail.com');
    }

    public function submitValorant(Request $request)
    {
        $tim_valorant = new Tim_Valorant();
        $tim_valorant->nama = $request->txtNamaTim;
        $tim_valorant->status = "Proses";
        $tim_valorant->email = $request->get("txtEmailOfficial");
        $logoExt = $request->file('inpLogoTeam')->getClientOriginalExtension();
        $namaFileLogo = 'UEL2022_Logo_'.$request->get("txtNamaTim").".".$logoExt;
        $path = $request->file('inpLogoTeam')->move('file_logo', $namaFileLogo);
        $tim_valorant->logo = $namaFileLogo;
        $tim_valorant->save();

        for ($i=1; $i <= 6; $i++) { 
            if(!empty($request->get("txtNamaPlayer".$i)))
            {
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
                $path = $request->file('inpFotoPlayer'.$i)->move('file_foto/'.$request->get("txtNamaTim")."/", $namaFileFoto);
                $player->foto = $namaFileFoto;
    
                $vaksinExt = $request->file('inpVaksinPlayer'.$i)->getClientOriginalExtension();
                $namaFileVaksin = 'UEL2022_Vaksin_'.$request->get("txtNamaPlayer".$i).".".$vaksinExt;
                $path = $request->file('inpVaksinPlayer'.$i)->move('file_vaksin/'.$request->get("txtNamaTim")."/", $namaFileVaksin);
                $player->vaksin = $namaFileVaksin;
    
                $ktmExt = $request->file('inpKTMPlayer'.$i)->getClientOriginalExtension();
                $namaFileKTM = 'UEL2022_KTM_'.$request->get("txtNamaPlayer".$i).".".$ktmExt;
                $path = $request->file('inpKTMPlayer'.$i)->move('file_ktm/'.$request->get("txtNamaTim")."/", $namaFileKTM);
                $player->ktm = $namaFileKTM;
                $player->save();
                
    
                $riwayat = new Riwayat_Valorant();
                $riwayat->keterangan = $request->get("txtRiwayatPlayer".$i);
                $riwayat->id_player = $player->id;
                $riwayat->save();
            }
        }

        //Official
        $official = new Valorant();
        $official->nama = $request->get("txtNamaOfficial");
        $official->fakultas = $request->get("selFakultasOfficial");
        $official->nrp = $request->get("txtNRPOfficial");
        $official->angkatan = $request->get("txtAngkatanOfficial");
        
        $official->id_line = $request->get("txtIDLineOfficial");
        $official->nomor = $request->get("txtNoHPOfficial");
        $official->instagram = $request->get("txtIGOfficial");
        $official->sebagai = $request->get("txtSebagaiOfficial");
        $official->domisili = $request->get("txtDomisiliOfficial");
        $official->id_tim = $tim_valorant->id;
        $official->id_fakultas = 1;

        $fotoExt = $request->file('inpFotoOfficial')->getClientOriginalExtension();
        $namaFileFoto = 'UEL2022_Foto_Official_'.$request->get("txtNamaOfficial").".".$fotoExt;
        $path = $request->file('inpFotoOfficial')->move('file_foto/'.$request->get("txtNamaTim")."/", $namaFileFoto);
        $official->foto = $namaFileFoto;

        $vaksinExt = $request->file('inpVaksinOfficial')->getClientOriginalExtension();
        $namaFileVaksin = 'UEL2022_Vaksin_Official_'.$request->get("txtNamaOfficial").".".$vaksinExt;
        $path = $request->file('inpVaksinOfficial')->move('file_vaksin/'.$request->get("txtNamaTim")."/", $namaFileVaksin);
        $official->vaksin = $namaFileVaksin;

        $ktmExt = $request->file('inpKTMOfficial')->getClientOriginalExtension();
        $namaFileKTM = 'UEL2022_KTM_Official_'.$request->get("txtNamaOfficial").".".$ktmExt;
        $path = $request->file('inpKTMOfficial')->move('file_ktm/'.$request->get("txtNamaTim")."/", $namaFileKTM);
        $official->ktm = $namaFileKTM;
        $official->save();

        Mail::to($request->get('txtEmailOfficial'))->send(new EmailSubmit($request->get('txtNamaTim')));
        Mail::to('sekretuel@gmail.com')->send(new EmailSubmit($request->get('txtNamaTim')));
        return redirect()->back()->with('success', 'Registrasi berhasil. Email konfirmasi akan dikirim dalam waktu 1x24 jam. Apabila tidak mendapatkan email, mohon melakukan konfirmasi pada email si.uel2022@gmail.com');
    }
    public function tambahanValorant(Request $request)
    {
        if(!empty($request->get("txtNamaPlayer")))
        {
            $tim_id = $request->get("txtTim");

            $player = new Valorant();
            $player->nama = $request->get("txtNamaPlayer");
            $player->fakultas = $request->get("selFakultasPlayer");
            $player->nrp = $request->get("txtNRPPlayer");
            $player->angkatan = $request->get("txtAngkatanPlayer");

            $player->id_line = $request->get("txtIDLinePlayer");
            $player->nomor = $request->get("txtNoHPPlayer");
            $player->instagram = $request->get("txtIGPlayer");
            $player->nickname = $request->get("txtNicknamePlayer");
            $player->tagline = $request->get("txtTaglinePlayer");
            $player->agent = $request->get("txtAgentPlayer");
            $player->role = $request->get("txtRolePlayer");
            $player->sebagai = $request->get("txtSebagaiPlayer");
            $player->domisili = $request->get("txtDomisiliPlayer");
            $player->id_tim = $tim_id;
            $player->id_fakultas = 1;

            $fotoExt = $request->file('inpFotoPlayer')->getClientOriginalExtension();
            $namaFileFoto = 'UEL2022_Foto_' . $request->get("txtNamaPlayer") . "." . $fotoExt;
            $path = $request->file('inpFotoPlayer')->move('file_foto/' . $request->get("txtNamaTim") . "/", $namaFileFoto);
            $player->foto = $namaFileFoto;

            $vaksinExt = $request->file('inpVaksinPlayer')->getClientOriginalExtension();
            $namaFileVaksin = 'UEL2022_Vaksin_' . $request->get("txtNamaPlayer") . "." . $vaksinExt;
            $path = $request->file('inpVaksinPlayer')->move('file_vaksin/' . $request->get("txtNamaTim") . "/", $namaFileVaksin);
            $player->vaksin = $namaFileVaksin;

            $ktmExt = $request->file('inpKTMPlayer')->getClientOriginalExtension();
            $namaFileKTM = 'UEL2022_KTM_' . $request->get("txtNamaPlayer") . "." . $ktmExt;
            $path = $request->file('inpKTMPlayer')->move('file_ktm/' . $request->get("txtNamaTim") . "/", $namaFileKTM);
            $player->ktm = $namaFileKTM;
            $player->save();


            $riwayat = new Riwayat_Valorant();
            $riwayat->keterangan = $request->get("txtRiwayatPlayer");
            $riwayat->id_player = $player->id;
            $riwayat->save();
        }
        
        return redirect()->route('registration')->with('success', 'Registrasi berhasil. Email konfirmasi akan dikirim dalam waktu 1x24 jam. Apabila tidak mendapatkan email, mohon melakukan konfirmasi pada email si.uel2022@gmail.com');
    }

    public function submitBA(Request $request)
    {
        $ba = new BrandAmbassador;
        $ba->nama = $request->get('txtNamaBA');
        $ba->fakultas = $request->get('selFakultasBA');
        $ba->nrp = $request->get('txtNRPBA');
        $ba->email = $request->get('txtEmailBA');
        $ba->line = $request->get('txtIDLineBA');
        $ba->whatsapp = $request->get('txtNoWABA');
        $ba->instagram = $request->get('txtIGBA');
        $ba->tentang_uel = $request->get('txtPertanyaan1BA');
        $ba->komitmen = $request->get('txtPertanyaan2BA');
        
        $fotoExt = $request->file('inpFotoBA')->getClientOriginalExtension();
        $namaFileFoto = 'UEL2022_Foto_BA_'.$request->get("txtNamaBA").".".$fotoExt;
        $path = $request->file('inpFotoBA')->move('ba/file_foto/', $namaFileFoto);
        $ba->foto = $namaFileFoto;

        $portfolioExt = $request->file('inpPortfolioBA')->getClientOriginalExtension();
        $namaFilePortfolio = 'UEL2022_Portfolio_BA_'.$request->get("txtNamaBA").".".$portfolioExt;
        $path = $request->file('inpPortfolioBA')->move('ba/file_portofolio/', $namaFilePortfolio);
        $ba->portofolio = $namaFilePortfolio;

        $ktmExt = $request->file('inpKTMBA')->getClientOriginalExtension();
        $namaFileKTM = 'UEL2022_KTM_BA_'.$request->get("txtNamaBA").".".$ktmExt;
        $path = $request->file('inpKTMBA')->move('ba/file_ktm/', $namaFileKTM);
        $ba->ktm = $namaFileKTM;

        $ba->save();
        Mail::to($request->get('txtEmailBA'))->send(new EmailSubmitBA($request->get('txtNamaBA')));
        Mail::to('sekretuel@gmail.com')->send(new EmailSubmitBA($request->get('txtNamaBA')));
        return redirect()->back()->with('success', 'Registrasi berhasil. Email konfirmasi akan dikirim dalam waktu 1x24 jam. Apabila tidak mendapatkan email, mohon melakukan konfirmasi pada email si.uel2022@gmail.com');
    }
}
