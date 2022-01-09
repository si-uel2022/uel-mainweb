<div class="portlet">
    <h5>{{ $person->nama }}</h5>
    <ul>
        <li>Tentang UEL: {{ $person->tentang_uel }}</li>
        <li>Komitmen: {{ $person->komitmen }}</li>
    </ul>

    <p style="text-align: center; font-weight: bold">KTM</p>
    <img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('file_ktm/'.$person->ktm) }}" alt="" width="100px;">
</div>