@extends('admin.layout')

@section('title', 'Admin')

@section('content')

    <h1 class="text-center">Update Poin Cabang {{ $cabang }}</h1>
    <br><br><br>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-dark">
                <thead class="text-center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Tim</th>
                        <th scope="col">Poin Sekarang</th>
                        <th scope="col" text-align="center">Update Poin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tim as $t)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $t->namatim }}</td>
                            <td id="poin_tim_{{ $t->id }}">{{ $t->poin }} <input type="hidden" name="txtPoinAwal" value="{{$t->poin}}"/></td>
                            <td>
                                <div class="input-group mb-3" style="height: 20px;">
                                    <input type="number" class="form-control" style="width: 25px;" placeholder="Masukan poin" name="txtInputPoin" id="up_poin_tim_{{ $t->id }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" onclick="update_poin({{ $t->id }})">Update poin</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script> function update_poin(id_tim) {
            if (confirm('Pastikan nama tim, dan poin benar.')) {

                var poin = $('#up_poin_tim_'+id_tim).val();

                $.post('{{ route('poin.updatepoin') }}', {
                        _token: "<?php echo csrf_token(); ?>",
                        id_tim : id_tim,
                        poin : poin,
                    },
                    function(data) {
                        if (data.status == 'oke') {
                            $('#poin_tim_' + id_tim).html(poin);
                            $('#up_poin_tim_' + id_tim).val("");
                        }
                        alert(data.msg);
                    }
                );
            }
        }
    </script>

@endsection
