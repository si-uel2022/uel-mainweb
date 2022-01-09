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
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_vaksin/'.$tim->nama.'/'.$player->vaksin) }}" alt="" width="100px;"> <br>
    <p style="text-align: center; font-weight: bold">KTM</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_ktm/'.$tim->nama.'/'.$player->ktm) }}" alt="" width="100px;"> <br>
    <p style="text-align: center; font-weight: bold">Foto</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_foto/'.$tim->nama.'/'.$player->foto) }}" alt="" width="100px;">
</div>