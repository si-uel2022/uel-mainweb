<div class="portlet">
    <h5>{{ $player->nama }}</h5>
    <ul>
        <li>ID Server: {{ $player->id_server }}</li>
        <li>Nickname: {{ $player->nickname }}</li>
        <li>Hero: {{ $player->hero }}</li>
        <li>Role: {{ $player->role }}</li>
        <li>Device: {{ $player->device }}</li>
    </ul>

    <p style="text-align: center; font-weight: bold">Sertifikat Vaksin</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_vaksin/'.$player->vaksin) }}" alt="" width="100px;"> <br>
    <p style="text-align: center; font-weight: bold">KTM</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_ktm/'.$player->ktm) }}" alt="" width="100px;"> <br>
    <p style="text-align: center; font-weight: bold">Foto</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_foto/'.$player->foto) }}" alt="" width="100px;">
</div>