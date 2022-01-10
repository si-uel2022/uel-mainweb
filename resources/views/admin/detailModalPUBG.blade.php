<div class="portlet">
    <h5>{{ $player->nama }}</h5>
    @if ($player->sebagai == "Player")
    <ul>
        <li>ID Game: {{ $player->id_game }}</li>
        <li>Nick Game: {{ $player->nick_game }}</li>
        <li>Senjata: {{ $player->senjata }}</li>
        <li>Role: {{ $player->role }}</li>
        <li>Device: {{ $player->device }}</li>
    </ul>
    @endif

    <p style="text-align: center; font-weight: bold">Sertifikat Vaksin</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_vaksin/'.$tim->nama.'/'.$player->vaksin) }}" alt="" width="100px;"> <br>
    <p style="text-align: center; font-weight: bold">KTM</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_ktm/'.$tim->nama.'/'.$player->ktm) }}" alt="" width="100px;"> <br>
    
    <hr>
    <h5>Riwayat Player</h5>
    @foreach ($riwayat as $r)
        <p> {{ $r->keterangan }} </p>
    @endforeach
</div>