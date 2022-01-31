<form action="#" method="POST">
    <div class="form-group row">
        <label class="col-sm-12 col-form-label text-secondary text-center"><b>{{ $tim->nama }}</b></label>
        <label class="col-sm-12 col-form-label text-secondary text-center">Grup {{ $tim->grup }}, Week
            {{ $tim->week }}</label>
        <label class="col-sm-12 col-form-label text-secondary text-center">Current: {{ $tim->win }} Win, {{ $tim->lose }} Lose</label>
        <input type="hidden" name="txtWin" id="currentwin" value="{{$tim->win}}"/>
        <input type="hidden" name="txtLose" id="currentlose" value="{{$tim->lose}}"/>
    </div>
    <div class="form-group row">
        <label for="game" class="col-sm-2 col-form-label text-secondary">Game</label>
        <div class="col-sm-10">
            <input type="number" name="game" class="form-control" id="pgame" value="{{ $tim->game + 1 }}" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label for="result" class="col-sm-2 col-form-label text-secondary">Result</label>
        <div class="col-sm-5">
            <label class="radio-inline text-secondary">
                <input type="radio" id="rwin" name="optradio" value="win" checked> Win
            </label>
        </div>
        <div class="col-sm-5">
            <label class="radio-inline text-secondary">
                <input type="radio" id="rlose" name="optradio" value="lose"> Lose
            </label>
        </div>
    </div>
    <div class="form-group row">
        <label for="point" class="col-sm-2 col-form-label text-secondary">Point</label>
        <div class="col-sm-2">
            <label class="col-form-label text-secondary">{{ $tim->point }}</label>
            <input type="hidden" name="txtpoint" id="currentpoint" value="{{$tim->point}}"/>
        </div>
        <div class="col-sm-2">
            <label class="col-form-label text-secondary">+</label>
        </div>
        <div class="col-sm-6">
            <input type="number" name="point" class="form-control" id="ppoint" placeholder="masukan point">
        </div>
    </div>
    <div class="form-group row">
        <label for="timkill" class="col-sm-2 col-form-label text-secondary">Tim Kill</label>
        <div class="col-sm-2">
            <label class="col-form-label text-secondary">{{ $tim->tim_kill }}</label>
            <input type="hidden" name="txttimkill" id="currenttimkill" value="{{$tim->tim_kill}}"/>
        </div>
        <div class="col-sm-2">
            <label class="col-form-label text-secondary">+</label>
        </div>
        <div class="col-sm-6">
            <input type="number" name="timkill" class="form-control" id="ptimkill" placeholder="masukan tim kill">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 text-right">
            <button type="button" id="eBtnEdit" onclick="simpanPoin_ML({{ $tim->id }})"
                class="btn btn-primary" data-dismiss="modal">Update</button>
            <a href="" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</form>

<script>
    function simpanPoin_ML(id_tim) {
        $('#eBtnEdit').html('Saving data...');
        
        var ctimkill = parseInt($('#currenttimkill').val());
        var cpoint = parseInt($('#currentpoint').val());
        var win = parseInt($('#currentwin').val());
        var lose = parseInt($('#currentlose').val());

        var game = $('#pgame').val();

        var point = cpoint + parseInt($('#ppoint').val());
        var timkill = ctimkill + parseInt($('#ptimkill').val());

        if (document.getElementById('rwin').checked) {
            win = win+1;
        } 
        if (document.getElementById('rlose').checked) {
            lose = lose+1;
        }

        $.post('{{ route('poin.simpanPoin_ML') }}', {
                _token: "<?php echo csrf_token(); ?>",
                id_tim: id_tim,
                game: game,
                win: win,
                lose: lose,
                point: point,
                timkill: timkill,
            },
            function(data) {
                $('#eBtnEdit').html('Save');
                if (data.status == 'sukses') {
                    $('#data_game_' + id_tim).html(game);
                    $('#data_win_' + id_tim).html(win);
                    $('#data_lose_' + id_tim).html(lose);
                    $('#data_point_' + id_tim).html(point);
                    $('#data_timkill_' + id_tim).html(timkill);
                }
                alert(data.msg);
            });
    }
</script>
