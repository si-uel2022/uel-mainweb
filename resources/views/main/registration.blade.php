@extends("main.layout")

@section("content")
<br><br>
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@elseif (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}    
    </div>    
@endif
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
    <div class="col-sm">
        <button type="button" class="nav-btn" id="btn-ba">Brand Ambassador</button>
    </div>
</div>

<br><br><br><br><br>

<div class="div" id="div-ba">
    <h2>Brand Ambassador</h2>
    <hr class="border border-primary"/>
    <form action="{{route('registration/submitBA')}}" enctype="multipart/form-data" method="POST" class="form-input">
    @csrf
    
    <div class="row text-center">
        <div class="col-sm"></div>
        <div class="col-sm">
            <button type="button" class="nav-btn" data-toggle="modal" data-target="#guidelineBA">Guideline</button>
        </div>
        <div class="col-sm"></div>
    </div>
    <br><br><br>
   
    
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center">
            <section>
                
                <h2 class="bolded">Data Brand Ambassador</h2>
                <div class="row">
                    <div class="col-sm">
                        <h3>Nama Lengkap</h3>
                        <input type="text" name="txtNamaBA" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Fakultas</h3>
                        <select id="" name="selFakultasBA" class="textbox form-control">
                            @foreach ($fakultas as $f)
                            <option value="{{$f->nama}}">{{$f->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>NRP</h3>
                        <input type="text" name="txtNRPBA" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Email</h3>
                        <input type="text" name="txtEmailBA" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>ID Line</h3>
                        <input type="text" name="txtIDLineBA" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Nomor WA</h3>
                        <input type="text" name="txtNoWABA" class="textbox form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Instagram</h3>
                        <input type="text" name="txtIGBA" class="textbox form-control"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Apa yang kamu ketahui tentang UEL 2022?</h3>
                        <input type="text" name="txtPertanyaan1BA" class="textbox form-control"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <h3>Komitmen bila diterima menjadi BA UEL 2022?</h3>
                        <input type="text" name="txtPertanyaan2BA" class="textbox form-control"> 
                    </div>
                </div>
                <br><br>
                <h2 class="bolded">Upload File</h2>
                <h3>| Upload foto diri mohon dalam bentuk .zip, upload KTM dalam bentuk .png/.jpg dan upload portfolio dalam bentuk .pdf|</h3>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload portfolio</h3>
                    <input type="file" name="inpPortfolioBA" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoBA" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM/SS PROFIL MY UBAYA</h3>
                    <input type="file" name="inpKTMBA" class="textbox form-control" required>
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
            <button type="submit" class="nav-btn button-input">Submit Data</button>
        </div>
        <div class="col-sm"></div>
    </div>
    
    </form>

</div>

<div class="div" id="div-ml">
    <h2>Mobile Legends</h2>
    <hr class="border border-primary"/>
    <form action="{{route('registration/submitML')}}" enctype="multipart/form-data" method="POST" class="form-input">
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
                
                @if ($i == 6)
                <h2>Player {{$i}} (Opsional)</h2>
                @else
                <h2>Player {{$i}}</h2>
                @endif
                
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
                        <h3>Nomor WA</h3>
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
                        <input type="text" name="txtRolePlayer{{$i}}" class="textbox form-control">
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
                <h3>| Upload foto diri dan sertifikat vaksin mohon dalam bentuk .zip, upload KTM dalam bentuk .png/.jpg |</h3>
                <br>
                @if ($i == 6)
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                    <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM</h3>
                    <input type="file" name="inpKTMPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                    <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM</h3>
                    <input type="file" name="inpKTMPlayer{{$i}}" class="textbox form-control" required>
                    </div>
                </div>
                @endif
                

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
                        <select id="" name="selFakultasOfficial" class="textbox form-control">
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
                        <h3>Nomor WA</h3>
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
                <div class="row">
                    <div class="col-sm">
                        <h3>Email</h3>
                        <input type="text" name="txtEmailOfficial" class="textbox form-control"> 
                    </div>
                </div>
                
                <input type="hidden" name="txtSebagaiOfficial" value="Official" class="textbox form-control">
                <br><br>
                <h2 class="bolded">Upload File</h2>
                <h3>| Upload foto diri dan sertifikat vaksin mohon dalam bentuk .zip, upload KTM dalam bentuk .png/.jpg |</h3>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoOfficial" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                    <input type="file" name="inpVaksinOfficial" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM</h3>
                    <input type="file" name="inpKTMOfficial" class="textbox form-control" required>
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
            <button type="submit" class="nav-btn button-input">Submit Data</button>
        </div>
        <div class="col-sm"></div>
    </div>
    
    </form>

    

    
</div>

<div class="div" id="div-valorant">
    <h2>Valorant</h2>
    <hr class="border border-primary"/>
    <form action="{{route('registration/submitValorant')}}" enctype="multipart/form-data" method="POST" class="form-input">
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
                
                @if ($i == 6)
                <h2>Player {{$i}} (Opsional)</h2>
                @else
                <h2>Player {{$i}}</h2>
                @endif
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
                        <h3>Nomor WA</h3>
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
                <h3>| Upload foto diri dan sertifikat vaksin mohon dalam bentuk .zip, upload KTM dalam bentuk .png/.jpg |</h3>
                <br>
                @if ($i == 6)
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                    <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM</h3>
                    <input type="file" name="inpKTMPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                    <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM</h3>
                    <input type="file" name="inpKTMPlayer{{$i}}" class="textbox form-control" required>
                    </div>
                </div>
                @endif

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
                        <select id="" name="selFakultasOfficial" class="textbox form-control">
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
                        <h3>Nomor WA</h3>
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
                    <div class="row">
                        <div class="col-sm">
                            <h3>Email</h3>
                            <input type="text" name="txtEmailOfficial" class="textbox form-control"> 
                        </div>
                    </div>
                </div>
                
                <input type="hidden" name="txtSebagaiOfficial" value="Official" class="textbox form-control">
                <br><br>
                <h2 class="bolded">Upload File</h2>
                <h3>| Upload foto diri dan sertifikat vaksin mohon dalam bentuk .zip, upload KTM dalam bentuk .png/.jpg |</h3>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoOfficial" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                    <input type="file" name="inpVaksinOfficial" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM</h3>
                    <input type="file" name="inpKTMOfficial" class="textbox form-control" required>
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
            <button type="submit" class="nav-btn button-input">Submit Data</button>
        </div>
        <div class="col-sm"></div>
    </div>
    
    </form>

    

    
</div>

<div class="div" id="div-pubg">
    <h2>PUBG Mobile</h2>
    <hr class="border border-primary"/>
    <form action="{{route('registration/submitPUBG')}}" enctype="multipart/form-data" method="POST" class="form-input">
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
   

    
    @for ($i = 1; $i < 5; $i++)
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
                        <h3>Nomor WA</h3>
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
                        <input type="text" name="txtRolePlayer{{$i}}" class="textbox form-control">
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
                <h3>| Upload foto diri dan sertifikat vaksin mohon dalam bentuk .zip, upload KTM dalam bentuk .png/.jpg |</h3>
                <br>
                @if ($i == 6)
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                    <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control">
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM</h3>
                    <input type="file" name="inpKTMPlayer{{$i}}" class="textbox form-control">
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoPlayer{{$i}}" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                    <input type="file" name="inpVaksinPlayer{{$i}}" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM</h3>
                    <input type="file" name="inpKTMPlayer{{$i}}" class="textbox form-control" required>
                    </div>
                </div>
                @endif

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
                        <select id="" name="selFakultasOfficial" class="textbox form-control">
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
                        <h3>Nomor WA</h3>
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
                    <div class="row">
                        <div class="col-sm">
                            <h3>Email</h3>
                            <input type="text" name="txtEmailOfficial" class="textbox form-control"> 
                        </div>
                    </div>
                </div>
                
                <input type="hidden" name="txtSebagaiOfficial" value="Official" class="textbox form-control">
                <br><br>
                <h2 class="bolded">Upload File</h2>
                <h3>| Upload foto diri dan sertifikat vaksin mohon dalam bentuk .zip, upload KTM dalam bentuk .png/.jpg |</h3>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <h3>Upload foto diri</h3>
                    <input type="file" name="inpFotoOfficial" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload sertifikat vaksin</h3>
                    <input type="file" name="inpVaksinOfficial" class="textbox form-control" required>
                    </div>
                    <div class="col-sm">
                        <h3>Upload KTM</h3>
                    <input type="file" name="inpKTMOfficial" class="textbox form-control" required>
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
            <button type="submit" class="nav-btn button-input">Submit Data</button>
        </div>
        <div class="col-sm"></div>
    </div>
    
    </form>
</div>

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

<div class="modal fade" id="guidelineBA" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Guideline Brand Ambassador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 style="text-align: center">Guideline Foto</h5>   
                <ol>
                    <li>Foto merupakan foto setengah badan atau sepinggang dengan background polos
                    </li>
                    <li>Foto memiliki kualitas HD
                    </li>
                    <li>Peserta BA mengumpulkan foto dengan 2 pose berbeda yang terdiri dari:
                        <ul>
                            <li>1 foto dengan gaya formal
                            </li>
                            <li>1 foto gaya bebas semenarik mungkin sesuai diri masing-masing
                            </li>
                        </ul>
                    </li>
                    <li>Foto menggunakan pakaian bebas, rapi, dan sopan</li>
                    <li>Pastikan foto dalam kondisi terang
                    </li>
                    <li>Foto wajib dikumpulkan dengan format nama: Fakultas_Nama Lengkap
                    </li>
                    <li>Foto dalam bentuk jpg/png
                    </li>
                </ol>

                <p style="text-align: center">Contoh foto 1 :</p>
                <img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset("images/contoh_foto1.png")}}" alt="Contoh Foto">
                <p style="text-align: center">Contoh foto 2 :</p>
                <img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset("images/contoh_foto2.png")}}" alt="Contoh Foto">

                <hr>
                <h5 style="text-align: center">Guideline Portofolio</h5>   
                <ol>
                    <li>Portofolio terdiri dari:
                        <ul>
                            <li>Minimal 3 foto diri terbaik. Foto boleh diambil dari instagram masing-masing. Foto menunjukkan muka dengan jelas dan tidak mengandung unsur SARA, pornografi, ataupun kekerasan
                            </li>
                            <li>Data diri yang minimal terdiri dari nama lengkap, fakultas, angkatan, dan NRP
                            </li>
                        </ul>
                    </li>
                    <li>Portofolio dalam bentuk pdf dengan ketentuan ukuran portofolio bebas asalkan memuat minimal kedua hal yang telah disebut pada nomor (1)
                    </li>
                    <li>Portofolio dibuat sekreatif mungkin dengan memperhatikan ketentuan yang telah diberikan.
                    </li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.form-input').submit(function(){
            $('.button-input').prop('disabled', true);
        })

        $('#div-ml').hide();
        $('#div-valorant').hide();
        $('#div-pubg').hide();
        $('#div-ba').hide();
        $('#btn-ml').click(function()
        {
            $('#div-ml').toggle('slow');
            $('#div-valorant').hide();
            $('#div-pubg').hide();
            $('#div-ba').hide();
        });
        $('#btn-valorant').click(function()
        {
            $('#div-ml').hide();
            $('#div-valorant').toggle('slow');
            $('#div-pubg').hide();
            $('#div-ba').hide();
        });
        $('#btn-pubg').click(function()
        {
            $('#div-ml').hide();
            $('#div-valorant').hide();
            $('#div-pubg').toggle('slow');
            $('#div-ba').hide();
        });
        $('#btn-ba').click(function()
        {
            $('#div-ml').hide();
            $('#div-valorant').hide();
            $('#div-pubg').hide();
            $('#div-ba').toggle('slow');
        });
    })
    
</script>
@endsection