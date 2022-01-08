@extends("main.layout")

@section("content")

<h1 class="text-center">Registration</h1>
<br><br><br>
<div class="row text-center">
    <div class="col-sm">
        <button type="button" class="nav-btn" id="btn-ml">Mobile Legends</button>
    </div>
    <div class="col-sm">
        <button type="button" class="nav-btn" id="btn-valorant">Valorant</button>
    </div>
    <div class="col-sm">
        <button type="button" class="nav-btn" id="btn-pubg">PUBG Mobile</button>
    </div>
</div>
<br><br><br><br><br>

<div class="div" id="div-ml">
    <h2>Mobile Legends</h2>
    <hr class="border border-primary"/>
    <form action="{{route('registration/submitML')}}" enctype="multipart/form-data">
    @csrf
    
    <div class="row">
        <div class="col">
            <h2>Nama Tim</h2>
            <input type="text" name="txtNamaTim" class="textbox form-control"><
        </div>
        <div class="col">
            <h2>Upload logo tim</h2>
            <input type="file" name="inpLogoTeam" class="textbox form-control">
        </div>
    </div>
    <br><br>
    <div class="row text-center">
        <div class="col-sm"></div>
        <div class="col-sm">
            <button type="button" class="nav-btn" data-toggle="modal" data-target="#guidelineFotoModal">Guideline Foto</button>
        </div>
        <div class="col-sm"></div>
    </div>
    <br><br><br>
   

    
    @for ($i = 1; $i < 7; $i++)
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center">
            <section>
                
                <h2>Player {{$i}}</h2>
                <br>
                <h2 class="bolded">Data Umum</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nama</h3>
                        <input type="text" name="txtNamaPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Fakultas</h3>
                        <select id="" name="selFakultasPlayer{{$i}}" class="textbox form-control">
                            @foreach ($fakultas as $f)
                            <option value="{{$f->nama}}">{{$f->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>NRP</h3>
                        <input type="text" name="txtNRPPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Angkatan</h3>
                        <input type="text" name="txtAngkatanPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>

                <br><br>
                <h2 class="bolded">Data Pribadi</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>ID Line</h3>
                        <input type="text" name="txtIDLinePlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Nomor HP</h3>
                        <input type="text" name="txtNoHPPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Instagram</h3>
                        <input type="text" name="txtIGPlayer{{$i}}" class="textbox form-control"> 
                    </div>
                    <div class="col-sm">
                        <h3>Domisili</h3>
                        <input type="text" name="txtDomisiliPlayer{{$i}}" class="textbox form-control"> 
                    </div>
                </div>
                
                <br><br>
                <h2 class="bolded">Data E-Sport</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nickname</h3>
                        <input type="text" name="txtNicknamePlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>ID Server</h3>
                        <input type="text" name="txtIDServerPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Hero Favorit</h3>
                        <input type="text" name="txtHeroPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Role</h3>
                        <input type="text" name="txtHeroPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Device</h3>
                        <input type="text" name="txtDevicePlayer{{$i}}" class="textbox form-control">
                    </div>
                   
                    <input type="hidden" name="txtSebagaiPlayer{{$i}}" value="Player" class="textbox form-control">
                   
                </div>

                <br><br>
                <h2 class="bolded">Upload File</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>

                <br><br>
                <h2 class="bolded">Riwayat Turnamen</h2>
                <div class="row">
                    <textarea name="txtRiwayatPlayer{{$i}}" class="textbox form-control" cols="30" rows="10">
                        
                    </textarea>
                </div>
            </section>
            <br><br>
            <hr class="border border-primary"/>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
    @endfor   
    

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center">
            <section>
                
                <h2>Official</h2>
                <br>
                <h2 class="bolded">Data Umum</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nama</h3>
                        <input type="text" name="txtNamaOfficial" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Fakultas</h3>
                        <select id="" name="selFakultasPlayerOfficial" class="textbox form-control">
                            @foreach ($fakultas as $f)
                            <option value="{{$f->nama}}">{{$f->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>NRP</h3>
                        <input type="text" name="txtNRPOfficial" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Angkatan</h3>
                        <input type="text" name="txtAngkatanOfficial" class="textbox form-control">
                    </div>
                </div>

                <br><br>
                <h2 class="bolded">Data Pribadi</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>ID Line</h3>
                        <input type="text" name="txtIDLineOfficial" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Nomor HP</h3>
                        <input type="text" name="txtNoHPOfficial" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Instagram</h3>
                        <input type="text" name="txtIGOfficial" class="textbox form-control"> 
                    </div>
                    <div class="col-sm">
                        <h3>Domisili</h3>
                        <input type="text" name="txtDomisiliOfficial" class="textbox form-control"> 
                    </div>
                </div>
                
                <input type="hidden" name="txtSebagaiOfficial" value="Player" class="textbox form-control">
                <br><br>
                <h2 class="bolded">Upload File</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
            </section>
            <br><br>
            <hr class="border border-primary"/>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm"></div>
        <div class="col-sm">
            <button type="submit" class="nav-btn">Submit Data</button>
        </div>
        <div class="col-sm"></div>
    </div>
    
    </form>

    

    <div class="modal fade" id="guidelineFotoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guideline Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">   
                    <ol>
                        <li>Foto merupakan foto setengah badan atau sepinggang dengan background polos
                        </li>
                        <li>Foto memiliki kualitas HD
                        </li>
                        <li>Player mengumpulkan foto dengan 3 pose berbeda yang terdiri dari:
                            <ul>
                                <li>1 gaya melipat tangan (WAJIB)
                                </li>
                                <li>2 gaya bebas yang sudah disepakati oleh masing-masing tim
                                </li>
                            </ul>
                        </li>
                        <li>Menggunakan pakaian berkerah dengan warna senada untuk setiap tim</li>
                        <li>Pastikan foto dalam kondisi terang
                        </li>
                        <li>Foto wajib dikumpulkan dengan format nama: Nama Tim_Nama
                        </li>
                    </ol>

                    <p style="text-align: center">Contoh foto :</p>
                    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset("images/contoh_foto.png")}}" alt="Contoh Foto">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="div" id="div-valorant">
    <h2>Valorant</h2>
    <hr class="border border-primary"/>
    <form action="{{route('registration/submitML')}}" enctype="multipart/form-data">
    @csrf
    
    <div class="row">
        <div class="col">
            <h2>Nama Tim</h2>
            <input type="text" name="txtNamaTim" class="textbox form-control"><
        </div>
        <div class="col">
            <h2>Upload logo tim</h2>
            <input type="file" name="inpLogoTeam" class="textbox form-control">
        </div>
    </div>
    <br><br>
    <div class="row text-center">
        <div class="col-sm"></div>
        <div class="col-sm">
            <button type="button" class="nav-btn" data-toggle="modal" data-target="#guidelineFotoModal">Guideline Foto</button>
        </div>
        <div class="col-sm"></div>
    </div>
    <br><br><br>
   

    
    @for ($i = 1; $i < 7; $i++)
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center">
            <section>
                
                <h2>Player {{$i}}</h2>
                <br>
                <h2 class="bolded">Data Umum</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nama</h3>
                        <input type="text" name="txtNamaPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Fakultas</h3>
                        <select id="" name="selFakultasPlayer{{$i}}" class="textbox form-control">
                            @foreach ($fakultas as $f)
                            <option value="{{$f->nama}}">{{$f->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>NRP</h3>
                        <input type="text" name="txtNRPPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Angkatan</h3>
                        <input type="text" name="txtAngkatanPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>

                <br><br>
                <h2 class="bolded">Data Pribadi</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>ID Line</h3>
                        <input type="text" name="txtIDLinePlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Nomor HP</h3>
                        <input type="text" name="txtNoHPPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Instagram</h3>
                        <input type="text" name="txtIGPlayer{{$i}}" class="textbox form-control"> 
                    </div>
                    <div class="col-sm">
                        <h3>Domisili</h3>
                        <input type="text" name="txtDomisiliPlayer{{$i}}" class="textbox form-control"> 
                    </div>
                </div>
                
                <br><br>
                <h2 class="bolded">Data E-Sport</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nickname</h3>
                        <input type="text" name="txtNicknamePlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Tagline</h3>
                        <input type="text" name="txtTaglinePlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Agent Favorit</h3>
                        <input type="text" name="txtAgentPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Role</h3>
                        <input type="text" name="txtHeroPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>                  
                    <input type="hidden" name="txtSebagaiPlayer{{$i}}" value="Player" class="textbox form-control">                  

                <br><br>
                <h2 class="bolded">Upload File</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
            </section>
            <br><br>
            <hr class="border border-primary"/>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
    @endfor   
    

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center">
            <section>
                
                <h2>Official</h2>
                <br>
                <h2 class="bolded">Data Umum</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nama</h3>
                        <input type="text" name="txtNamaOfficial" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Fakultas</h3>
                        <select id="" name="selFakultasPlayerOfficial" class="textbox form-control">
                            @foreach ($fakultas as $f)
                            <option value="{{$f->nama}}">{{$f->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>NRP</h3>
                        <input type="text" name="txtNRPOfficial" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Angkatan</h3>
                        <input type="text" name="txtAngkatanOfficial" class="textbox form-control">
                    </div>
                </div>

                <br><br>
                <h2 class="bolded">Data Pribadi</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>ID Line</h3>
                        <input type="text" name="txtIDLineOfficial" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Nomor HP</h3>
                        <input type="text" name="txtNoHPOfficial" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Instagram</h3>
                        <input type="text" name="txtIGOfficial" class="textbox form-control"> 
                    </div>
                    <div class="col-sm">
                        <h3>Domisili</h3>
                        <input type="text" name="txtDomisiliOfficial" class="textbox form-control"> 
                    </div>
                </div>
                
                <input type="hidden" name="txtSebagaiOfficial" value="Player" class="textbox form-control">
                <br><br>
                <h2 class="bolded">Upload File</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
            </section>
            <br><br>
            <hr class="border border-primary"/>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm"></div>
        <div class="col-sm">
            <button type="submit" class="nav-btn">Submit Data</button>
        </div>
        <div class="col-sm"></div>
    </div>
    
    </form>

    

    <div class="modal fade" id="guidelineFotoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guideline Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">   
                    <ol>
                        <li>Foto merupakan foto setengah badan atau sepinggang dengan background polos
                        </li>
                        <li>Foto memiliki kualitas HD
                        </li>
                        <li>Player mengumpulkan foto dengan 3 pose berbeda yang terdiri dari:
                            <ul>
                                <li>1 gaya melipat tangan (WAJIB)
                                </li>
                                <li>2 gaya bebas yang sudah disepakati oleh masing-masing tim
                                </li>
                            </ul>
                        </li>
                        <li>Menggunakan pakaian berkerah dengan warna senada untuk setiap tim</li>
                        <li>Pastikan foto dalam kondisi terang
                        </li>
                        <li>Foto wajib dikumpulkan dengan format nama: Nama Tim_Nama
                        </li>
                    </ol>

                    <p style="text-align: center">Contoh foto :</p>
                    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset("images/contoh_foto.png")}}" alt="Contoh Foto">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="div" id="div-pubg">
    <h2>PUBG Mobile</h2>
    <hr class="border border-primary"/>
    <form action="{{route('registration/submitML')}}" enctype="multipart/form-data">
    @csrf
    
    <div class="row">
        <div class="col">
            <h2>Nama Tim</h2>
            <input type="text" name="txtNamaTim" class="textbox form-control"><
        </div>
        <div class="col">
            <h2>Upload logo tim</h2>
            <input type="file" name="inpLogoTeam" class="textbox form-control">
        </div>
    </div>
    <br><br>
    <div class="row text-center">
        <div class="col-sm"></div>
        <div class="col-sm">
            <button type="button" class="nav-btn" data-toggle="modal" data-target="#guidelineFotoModal">Guideline Foto</button>
        </div>
        <div class="col-sm"></div>
    </div>
    <br><br><br>
   

    
    @for ($i = 1; $i < 6; $i++)
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center">
            <section>
                
                <h2>Player {{$i}}</h2>
                <br>
                <h2 class="bolded">Data Umum</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nama</h3>
                        <input type="text" name="txtNamaPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Fakultas</h3>
                        <select id="" name="selFakultasPlayer{{$i}}" class="textbox form-control">
                            @foreach ($fakultas as $f)
                            <option value="{{$f->nama}}">{{$f->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>NRP</h3>
                        <input type="text" name="txtNRPPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Angkatan</h3>
                        <input type="text" name="txtAngkatanPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>

                <br><br>
                <h2 class="bolded">Data Pribadi</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>ID Line</h3>
                        <input type="text" name="txtIDLinePlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Nomor HP</h3>
                        <input type="text" name="txtNoHPPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Instagram</h3>
                        <input type="text" name="txtIGPlayer{{$i}}" class="textbox form-control"> 
                    </div>
                    <div class="col-sm">
                        <h3>Domisili</h3>
                        <input type="text" name="txtDomisiliPlayer{{$i}}" class="textbox form-control"> 
                    </div>
                </div>
                
                <br><br>
                <h2 class="bolded">Data E-Sport</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nickname</h3>
                        <input type="text" name="txtNicknamePlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>ID Game</h3>
                        <input type="text" name="txtIDGamePlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Senjata Favorit</h3>
                        <input type="text" name="txtSenjataPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Role</h3>
                        <input type="text" name="txtHeroPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Device</h3>
                        <input type="text" name="txtDevicePlayer{{$i}}" class="textbox form-control">
                    </div>
                   
                    <input type="hidden" name="txtSebagaiPlayer{{$i}}" value="Player" class="textbox form-control">
                   
                </div>

                <br><br>
                <h2 class="bolded">Upload File</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
            </section>
            <br><br>
            <hr class="border border-primary"/>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
    @endfor   
    

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center">
            <section>
                
                <h2>Official</h2>
                <br>
                <h2 class="bolded">Data Umum</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nama</h3>
                        <input type="text" name="txtNamaOfficial" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Fakultas</h3>
                        <select id="" name="selFakultasPlayerOfficial" class="textbox form-control">
                            @foreach ($fakultas as $f)
                            <option value="{{$f->nama}}">{{$f->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>NRP</h3>
                        <input type="text" name="txtNRPOfficial" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Angkatan</h3>
                        <input type="text" name="txtAngkatanOfficial" class="textbox form-control">
                    </div>
                </div>

                <br><br>
                <h2 class="bolded">Data Pribadi</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>ID Line</h3>
                        <input type="text" name="txtIDLineOfficial" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Nomor HP</h3>
                        <input type="text" name="txtNoHPOfficial" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Instagram</h3>
                        <input type="text" name="txtIGOfficial" class="textbox form-control"> 
                    </div>
                    <div class="col-sm">
                        <h3>Domisili</h3>
                        <input type="text" name="txtDomisiliOfficial" class="textbox form-control"> 
                    </div>
                </div>
                
                <input type="hidden" name="txtSebagaiOfficial" value="Player" class="textbox form-control">
                <br><br>
                <h2 class="bolded">Upload File</h2>

                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
            </section>
            <br><br>
            <hr class="border border-primary"/>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm"></div>
        <div class="col-sm">
            <button type="submit" class="nav-btn">Submit Data</button>
        </div>
        <div class="col-sm"></div>
    </div>
    
    </form>

    

    <div class="modal fade" id="guidelineFotoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Guideline Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">   
                    <ol>
                        <li>Foto merupakan foto setengah badan atau sepinggang dengan background polos
                        </li>
                        <li>Foto memiliki kualitas HD
                        </li>
                        <li>Player mengumpulkan foto dengan 3 pose berbeda yang terdiri dari:
                            <ul>
                                <li>1 gaya melipat tangan (WAJIB)
                                </li>
                                <li>2 gaya bebas yang sudah disepakati oleh masing-masing tim
                                </li>
                            </ul>
                        </li>
                        <li>Menggunakan pakaian berkerah dengan warna senada untuk setiap tim</li>
                        <li>Pastikan foto dalam kondisi terang
                        </li>
                        <li>Foto wajib dikumpulkan dengan format nama: Nama Tim_Nama
                        </li>
                    </ol>

                    <p style="text-align: center">Contoh foto :</p>
                    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset("images/contoh_foto.png")}}" alt="Contoh Foto">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#div-ml').hide();
        $('#div-valorant').hide();
        $('#div-pubg').hide();
        $('#btn-ml').click(function()
        {
            $('#div-ml').toggle('slow');
            $('#div-valorant').hide();
            $('#div-pubg').hide();
        });
        $('#btn-valorant').click(function()
        {
            $('#div-ml').hide();
            $('#div-valorant').toggle('slow');
            $('#div-pubg').hide();
        });
        $('#btn-pubg').click(function()
        {
            $('#div-ml').hide();
            $('#div-valorant').hide();
            $('#div-pubg').toggle('slow');
        });
    })
    
</script>
@endsection