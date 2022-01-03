<div class="portlet">
    <ul>
        <li>ID Game: {{ $player->id_game }}</li>
        <li>Nick Game: {{ $player->nick_game }}</li>
        <li>Senjata: {{ $player->senjata }}</li>
        <li>Role: {{ $player->role }}</li>
        <li>Device: {{ $player->device }}</li>
    </ul>

    <p style="text-align: center; font-weight: bold">Sertifikat Vaksin</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('images/'.$player->vaksin) }}" alt="" width="100px;"> <br>
    <p style="text-align: center; font-weight: bold">KTM</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('images/'.$player->ktm) }}" alt="" width="100px;"> <br>
    <p style="text-align: center; font-weight: bold">Foto</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('images/'.$player->foto) }}" alt="" width="100px;">
</div>