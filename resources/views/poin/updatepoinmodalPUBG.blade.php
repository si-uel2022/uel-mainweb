<form action="#" method="POST">
    <div class="form-group row">
        <label class="col-sm-12 col-form-label text-secondary text-center"><b>{{ $tim->nama }}</b></label>
        <label class="col-sm-12 col-form-label text-secondary text-center">Week {{ $tim->week }}, Day
            {{ $tim->day }}</label>
    </div>
    <div class="form-group row">
        <label for="placementpoint" class="col-sm-4 col-form-label text-secondary">Placement Point</label>
        <div class="col-sm-8">
            <input type="number" name="placementpoint" class="form-control" id="pplacementpoint"
                placeholder="masukan placement point" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="killpoint" class="col-sm-4 col-form-label text-secondary">Kill Point</label>
        <div class="col-sm-8">
            <input type="number" name="killpoint" class="form-control" id="pkillpoint"
                placeholder="masukan kill point">
        </div>
    </div>
    <div class="form-group row">
        <label for="totalpoint" class="col-sm-4 col-form-label text-secondary">Total Point</label>
        <div class="col-sm-8">
            <input type="number" name="totalpoint" class="form-control" id="ptotalpoint"
                placeholder="masukan total point">
        </div>
    </div>
    <div class="form-group row">
        <label for="wwcdpoint" class="col-sm-4 col-form-label text-secondary">WWCD Point</label>
        <div class="col-sm-8">
            <input type="number" name="wwcdpoint" class="form-control" id="pwwcdpoint"
                placeholder="masukan wwcd point">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 text-right">
            <button type="button" id="eBtnEdit" onclick="simpanPoin_PUBG({{ $tim->id }})"
                class="btn btn-primary" data-dismiss="modal">Update</button>
            <a href="" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</form>

<script>
    function simpanPoin_PUBG(id_tim) {
        $('#eBtnEdit').html('Saving data...');
        var placementpoint = $('#pplacementpoint').val();
        var killpoint = $('#pkillpoint').val();
        var totalpoint = $('#ptotalpoint').val();
        var wwcdpoint = $('#pwwcdpoint').val();

        $.post('{{ route('poin.simpanPoin_PUBG') }}', {
                _token: "<?php echo csrf_token(); ?>",
                id_tim: id_tim,
                placementpoint: placementpoint,
                killpoint: killpoint,
                totalpoint: totalpoint,
                wwcdpoint: wwcdpoint,
            },
            function(data) {
                $('#eBtnEdit').html('Save');
                if (data.status == 'sukses') {
                    $('#data_placement_' + id_tim).html(placementpoint);
                    $('#data_kill_' + id_tim).html(killpoint);
                    $('#data_total_' + id_tim).html(totalpoint);
                    $('#data_wwcd_' + id_tim).html(wwcdpoint);
                    $('#modal_update_poin').modal('hide');
                }
                alert(data.msg);
            });
    }
</script>
