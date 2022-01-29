<form action="#" method="POST">
    <div class="form-group row">
        <label for="eName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="ini_nama_supplier" class="form-control" id="eName"
                placeholder="insert employee's name" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" name="email" class="form-control" id="eEmail" placeholder="insert employee's email">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 text-right">
            <button type="button" id="eBtnEdit" onclick="simpanPoin_ML({{ $id }})"
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

        $.post('{{ route('match.ml') }}', {
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
