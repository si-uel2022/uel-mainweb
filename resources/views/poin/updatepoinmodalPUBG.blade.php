<form action="#" method="POST">
    <div class="form-group row">
        <label class="col-sm-12 col-form-label text-secondary text-center">{{ $tim }}</label>
    </div>
    <div class="form-group row">
        <label for="eName" class="col-sm-4 col-form-label text-secondary">Placement Point</label>
        <div class="col-sm-8">
            <input type="number" name="ini_nama_supplier" class="form-control" id="eName"
                placeholder="insert employee's name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label text-secondary">Kill Point</label>
        <div class="col-sm-8">
            <input type="number" name="email" class="form-control" id="eEmail" placeholder="insert employee's email">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label text-secondary">Total Point</label>
        <div class="col-sm-8">
            <input type="number" name="email" class="form-control" id="eEmail" placeholder="insert employee's email">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label text-secondary">WWCD Point</label>
        <div class="col-sm-8">
            <input type="number" name="email" class="form-control" id="eEmail" placeholder="insert employee's email">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 text-right">
            {{-- <button type="button" id="eBtnEdit" onclick="simpanPoin_ML({{ $tim->id }})"
                class="btn btn-primary">Update</button>
            <a href="" class="btn btn-danger">Cancel</a> --}}
            <button type="button" id="eBtnEdit"
                class="btn btn-primary">Update</button>
            <a href="" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</form>

<script>
    function simpanPoin_ML(id_user) {
        $('#eBtnEdit').html('Saving data...');
        var name = $('#eName').val();
        var email = $('#eEmail').val();

        $.post('{{ route('poin.simpanPoin_ML') }}', {
                _token: "<?php echo csrf_token(); ?>",
                id_user: id_user,
                name: name,
                email: email
            },
            function(data) {
                $('#eBtnEdit').html('Save');
                if (data.status == 'sukses') {
                    $('.modal').modal('hide');
                    $('#data_name_' + id_user).html(name);
                    $('#data_email_' + id_user).html(email);
                }
                // alert(data.msg);
            });
    }
</script>
