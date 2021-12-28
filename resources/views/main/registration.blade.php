@extends("main.layout")

@section("content")
    <h1>registration</h1>

    <div class="div">ML
        <form action="" enctype="multipart/form-data">
            @csrf
        </form>
    <label>Nama tim : </label>
    <input type="text" name="txtNamaTim" class="textbox">

    <section>
        <h2>player1</h2>
        <label>Nama : </label>
        <input type="text" name="txtNamaPlayer1" class="textbox">
        <br>
        <label>Fakultas : </label> 
        <select name="" id="" name="selFakultasPlayer1" class="textbox">
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
        <label>ID Line : </label>
        <input type="text" name="txtIDLinePlayer1" class="textbox">
        <br>
        <label>Nomor HP : </label>
        <input type="text" name="txtNoHPPlayer1" class="textbox">
        <br>
        <label>Instagram : </label>
        <input type="text" name="txtIGPlayer1" class="textbox"> 
        <br>
        <label>Nickname : </label>
        <input type="text" name="txtNicknamePlayer1" class="textbox">
        <br>
        <label>ID Server : </label>
        <input type="text" name="txtIDServerPlayer1" class="textbox">
        <br>
        <label>Hero : </label>
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
        <input type="file" name="namaFilePlayer1" class="textbox">
        <br>
    </section>

    <section>
        <h2>player2</h2>
        <label>Nama : </label>
        <input type="text" name="txtNamaPlayer2">
        <br>
        <label>Fakultas : </label> 
        <select name="" id="" name="selFakultasPlayer2">
            <option value="">Teknik</option>
            <option value="">FBE</option>
        </select>
        <br>
        <label>NRP : </label>
        <input type="text" name="txtNRPPlayer2">
        <br>
        <label>Angkatan : </label>
        <input type="text" name="txtAngkatanPlayer2">
        <br>
        <label>ID Line : </label>
        <input type="text" name="txtIDLinePlayer2">
        <br>
        <label>Nomor HP : </label>
        <input type="text" name="txtNoHPPlayer2">
        <br>
        <label>Instagram : </label>
        <input type="text" name="txtIGPlayer2">
        <br>
        <label>Nickname : </label>
        <input type="text" name="txtNicknamePlayer2">
        <br>
        <label>ID Server : </label>
        <input type="text" name="txtIDServerPlayer2">
        <br>
        <label>Hero : </label>
        <input type="text" name="txtHeroPlayer2">
        <br>
        <label>Role : </label>
        <input type="text" name="txtHeroPlayer2">
        <br>
        <label>Device : </label>
        <input type="text" name="txtDevicePlayer2">
        <br>
        <label>Sebagai : </label>
        <input type="text" name="txtSebagaiPlayer2">
        <br>
        <label>Upload sertifikat vaksin : </label>
        <input type="file" name="namaFilePlayer2">
        <br>
    </section>

    <section>
        <h2>player3</h2>
        <label>Nama : </label>
        <input type="text" name="txtNamaPlayer3">
        <br>
        <label>Fakultas : </label> 
        <select name="" id="" name="selFakultasPlayer3">
            <option value="">Teknik</option>
            <option value="">FBE</option>
        </select>
        <br>
        <label>NRP : </label>
        <input type="text" name="txtNRPPlayer3">
        <br>
        <label>Angkatan : </label>
        <input type="text" name="txtAngkatanPlayer3">
        <br>
        <label>ID Line : </label>
        <input type="text" name="txtIDLinePlayer3">
        <br>
        <label>Nomor HP : </label>
        <input type="text" name="txtNoHPPlayer3">
        <br>
        <label>Instagram : </label>
        <input type="text" name="txtIGPlayer3">
        <br>
        <label>Nickname : </label>
        <input type="text" name="txtNicknamePlayer3">
        <br>
        <label>ID Server : </label>
        <input type="text" name="txtIDServerPlayer3">
        <br>
        <label>Hero : </label>
        <input type="text" name="txtHeroPlayer3">
        <br>
        <label>Role : </label>
        <input type="text" name="txtHeroPlayer3">
        <br>
        <label>Device : </label>
        <input type="text" name="txtDevicePlayer3">
        <br>
        <label>Sebagai : </label>
        <input type="text" name="txtSebagaiPlayer3">
        <br>
        <label>Upload sertifikat vaksin : </label>
        <input type="file" name="namaFilePlayer3">
        <br>
    </section>
</div>
@endsection