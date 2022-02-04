@extends("main.layout")

@section("content")
<br><br>

<h1 class="text-center klasemen-bigtext" >Mobile Legends</h1>
<br><br>
<div class="row text-center">
    <div class="col-sm">
        <button type="button" class="nav-btn" id="btn-a">Grup A</button>
    </div>
    <div class="col-sm">
        <button type="button" class="nav-btn" id="btn-b">Grup B</button>
    </div>
</div>

<br><br><br>

<div class="div" id="div-a">
    <h2 style="text-align: center" class="klasemen-bigtext">Grup A</h2>
    <hr class="border border-primary"/>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr align="center" style="color: white" class="klasemen-table-header">
                <th>No</th>
                <th>Team</th>
                <th>Game</th>
                <th>Win</th>
                <th>Lose</th>
                <th>Poin</th>
                <th>Team Kill</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($tim1 as $t)
                <tr align="center" class="klasemen-table">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->nama }}</td>
                    <td>{{ $t->game }}</td>
                    <td>{{ $t->win }}</td>
                    <td>{{ $t->lose }}</td>
                    <td>{{ $t->point }}</td>
                    <td>{{ $t->tim_kill }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="div" id="div-b">
    <h2 style="text-align: center" class="klasemen-bigtext">Grup B</h2>
    <hr class="border border-primary"/>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr align="center" style="color: white" class="klasemen-table-header">
                <th>No</th>
                <th>Team</th>
                <th>Game</th>
                <th>Win</th>
                <th>Lose</th>
                <th>Poin</th>
                <th>Team Kill</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($tim2 as $t)
                <tr align="center" class="klasemen-table">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->nama }}</td>
                    <td>{{ $t->game }}</td>
                    <td>{{ $t->win }}</td>
                    <td>{{ $t->lose }}</td>
                    <td>{{ $t->point }}</td>
                    <td>{{ $t->tim_kill }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- <div class="div" id="div-valorant">
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

    

    
</div> --}}

<script type="text/javascript">
    $(document).ready(function(){
        $('#div-a').hide();
        $('#div-b').hide();

        $('#btn-a').click(function()
        {
            $('#div-a').toggle('slow');
            $('#div-b').hide();
        });
        $('#btn-b').click(function()
        {
            $('#div-a').hide();
            $('#div-b').toggle('slow');
        });
    })
    
</script>
@endsection