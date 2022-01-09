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
    <p style="text-align: center; font-weight: bold">Foto</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_foto/'.$tim->nama.'/'.$player->foto) }}" alt="" width="100px;">
</div>