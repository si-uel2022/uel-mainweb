<div class="portlet">
    <h5>{{ $player->nama }}</h5>
    @if ($player->sebagai == "Player")
    <ul>
        <li>Tagline: {{ $player->tagline }}</li>
        <li>Nickname: {{ $player->nickname }}</li>
        <li>Agent: {{ $player->agent }}</li>
        <li>Role: {{ $player->role }}</li>
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