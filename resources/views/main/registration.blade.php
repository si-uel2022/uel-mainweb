@extends("main.layout")

@section("content")
    <h1>registration</h1>

<div class="div">ML
    <form action="{{route('registration/submitML')}}" enctype="multipart/form-data">
            @csrf
        
    <label>Nama tim : </label>
    <input type="text" name="txtNamaTim" class="textbox"><br>
    <label>Upload logo team : </label>
    <input type="file" name="inpLogoTeam" class="textbox">

    <div class="row">
        <div class="col-sm-6">
            <section>
                <h2>player1</h2>
                <label>Nama : </label>
                <input type="text" name="txtNamaPlayer1" class="textbox">
                <br>
                <label>Fakultas : </label> 
                <select id="" name="selFakultasPlayer1" class="textbox">
                    @foreach ($fakultas as $f)
                    <option value="{{$f->nama}}">{{$f->nama}}</option>
                    @endforeach
                </select>
                <br>
                <label>NRP : </label>
                <input type="text" name="txtNRPPlayer1" class="textbox">
                <br>
                <label>Angkatan : </label>
                <input type="text" name="txtAngkatanPlayer1" class="textbox">
                <br>
                <label>Upload foto diri : </label>
                <input type="file" name="inpFotoPlayer1" class="textbox">
                <br>
                <label>ID Line : </label>
                <input type="text" name="txtIDLinePlayer1" class="textbox">
                <br>
                <label>Nomor HP : </label>
                <input type="text" name="txtNoHPPlayer1" class="textbox">
                <br>
                <label>Instagram : </label>
                <input type="text" name="txtIGPlayer1" class="textbox"> 
                <br>
                <label>Domisili : </label>
                <input type="text" name="txtDomisiliPlayer1" class="textbox"> 
                <br>
                <label>Nickname : </label>
                <input type="text" name="txtNicknamePlayer1" class="textbox">
                <br>
                <label>ID Server : </label>
                <input type="text" name="txtIDServerPlayer1" class="textbox">
                <br>
                <label>Hero Favorit : </label>
                <input type="text" name="txtHeroPlayer1" class="textbox">
                <br>
                <label>Role : </label>
                <input type="text" name="txtHeroPlayer1" class="textbox">
                <br>
                <label>Device : </label>
                <input type="text" name="txtDevicePlayer1" class="textbox">
                <br>
                <label>Sebagai : </label>
                <input type="text" name="txtSebagaiPlayer1" class="textbox">
                <br>
                <label>Upload sertifikat vaksin : </label>
                <input type="file" name="inpVaksinPlayer1" class="textbox">
                <br>
            </section>
        </div>
        <div class="col-sm-6">
            <section>
                <h2>player2</h2>
                <label>Nama : </label>
                <input type="text" name="txtNamaPlayer2" class="textbox">
                <br>
                <label>Fakultas : </label> 
                <select id="" name="selFakultasPlayer2" class="textbox">
                    @foreach ($fakultas as $f)
                    <option value="{{$f->nama}}">{{$f->nama}}</option>
                    @endforeach
                </select>
                <br>
                <label>NRP : </label>
                <input type="text" name="txtNRPPlayer2" class="textbox">
                <br>
                <label>Angkatan : </label>
                <input type="text" name="txtAngkatanPlayer2" class="textbox">
                <br>
                <label>Upload foto diri : </label>
                <input type="file" name="inpFotoPlayer2" class="textbox">
                <br>
                <label>ID Line : </label>
                <input type="text" name="txtIDLinePlayer2" class="textbox">
                <br>
                <label>Nomor HP : </label>
                <input type="text" name="txtNoHPPlayer2" class="textbox">
                <br>
                <label>Instagram : </label>
                <input type="text" name="txtIGPlayer2" class="textbox"> 
                <br>
                <label>Domisili : </label>
                <input type="text" name="txtDomisiliPlayer2" class="textbox"> 
                <br>
                <label>Nickname : </label>
                <input type="text" name="txtNicknamePlayer2" class="textbox">
                <br>
                <label>ID Server : </label>
                <input type="text" name="txtIDServerPlayer2" class="textbox">
                <br>
                <label>Hero Favorit : </label>
                <input type="text" name="txtHeroPlayer2" class="textbox">
                <br>
                <label>Role : </label>
                <input type="text" name="txtHeroPlayer2" class="textbox">
                <br>
                <label>Device : </label>
                <input type="text" name="txtDevicePlayer2" class="textbox">
                <br>
                <label>Sebagai : </label>
                <input type="text" name="txtSebagaiPlayer2" class="textbox">
                <br>
                <label>Upload sertifikat vaksin : </label>
                <input type="file" name="inpVaksinPlayer2" class="textbox">
                <br>
            </section>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6">
            <section>
                <h2>player3</h2>
                <label>Nama : </label>
                <input type="text" name="txtNamaPlayer3" class="textbox">
                <br>
                <label>Fakultas : </label> 
                <select id="" name="selFakultasPlayer3" class="textbox">
                    @foreach ($fakultas as $f)
                    <option value="{{$f->nama}}">{{$f->nama}}</option>
                    @endforeach
                </select>
                <br>
                <label>NRP : </label>
                <input type="text" name="txtNRPPlayer3" class="textbox">
                <br>
                <label>Angkatan : </label>
                <input type="text" name="txtAngkatanPlayer3" class="textbox">
                <br>
                <label>Upload foto diri : </label>
                <input type="file" name="inpFotoPlayer3" class="textbox">
                <br>
                <label>ID Line : </label>
                <input type="text" name="txtIDLinePlayer3" class="textbox">
                <br>
                <label>Nomor HP : </label>
                <input type="text" name="txtNoHPPlayer3" class="textbox">
                <br>
                <label>Instagram : </label>
                <input type="text" name="txtIGPlayer3" class="textbox"> 
                <br>
                <label>Domisili : </label>
                <input type="text" name="txtDomisiliPlayer3" class="textbox"> 
                <br>
                <label>Nickname : </label>
                <input type="text" name="txtNicknamePlayer3" class="textbox">
                <br>
                <label>ID Server : </label>
                <input type="text" name="txtIDServerPlayer3" class="textbox">
                <br>
                <label>Hero Favorit : </label>
                <input type="text" name="txtHeroPlayer3" class="textbox">
                <br>
                <label>Role : </label>
                <input type="text" name="txtHeroPlayer3" class="textbox">
                <br>
                <label>Device : </label>
                <input type="text" name="txtDevicePlayer3" class="textbox">
                <br>
                <label>Sebagai : </label>
                <input type="text" name="txtSebagaiPlayer3" class="textbox">
                <br>
                <label>Upload sertifikat vaksin : </label>
                <input type="file" name="inpVaksinPlayer3" class="textbox">
                <br>
            </section>
        </div>
        <div class="col-sm-6">
            <section>
                <h2>Official</h2>
                <label>Nama : </label>
                <input type="text" name="txtNamaOfficial" class="textbox">
                <br>
                <label>Fakultas : </label> 
                <select id="" name="selFakultasOfficial" class="textbox">
                    @foreach ($fakultas as $f)
                    <option value="{{$f->nama}}">{{$f->nama}}</option>
                    @endforeach
                </select>
                <br>
                <label>NRP : </label>
                <input type="text" name="txtNRPOfficial" class="textbox">
                <br>
                <label>Angkatan : </label>
                <input type="text" name="txtAngkatanOfficial" class="textbox">
                <br>
                <label>Upload foto diri : </label>
                <input type="file" name="inpFotoOfficial" class="textbox">
                <br>
                <label>ID Line : </label>
                <input type="text" name="txtIDLineOfficial" class="textbox">
                <br>
                <label>Nomor HP : </label>
                <input type="text" name="txtNoHPOfficial" class="textbox">
                <br>
                <label>Instagram : </label>
                <input type="text" name="txtIGOfficial" class="textbox"> 
                <br>
                <label>Domisili : </label>
                <input type="text" name="txtDomisiliOfficial" class="textbox"> 
                <br>
                <label>Sebagai : </label>
                <input type="text" name="txtSebagaiOfficial" class="textbox">
                <br>
                <label>Upload sertifikat vaksin : </label>
                <input type="file" name="inpVaksinOfficial" class="textbox">
                <br>
            </section>
        </div>
    </div>
    
    <button type="submit">Submit Data</button>
    </form>

    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#guidelineFotoModal">Guideline Foto</button>

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
@endsection