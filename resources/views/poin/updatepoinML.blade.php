@extends('admin.layout')

@section('title', 'Admin')

@section('content')

    <h1 class="text-center">Update Poin Cabang</h1>
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
                            <td id="poin_tim_{{ $t->id }}">{{ $t->poin }}</td>
                            <td>
                                <a href="#modal_update_poin" class="btn btn-outline-success" data-toggle="modal" onclick="getDataFirst({{ $t->id }})">Update Poin</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

     {{-- ini popup utk btn edit /ajax --}}
     <div class="modal fade" id="modal_update_poin" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Update Poin</h4>
                </div>
                <div class="modal-body" id="isi_modal_update_poin">
                    --form edit--
                </div>
            </div>
        </div>
    </div>
    {{-- end ini popup utk btn edit --}}

    <script>

        function getDataFirst(id_tim) {
            $('#isi_modal_update_poin').html('loading...');
            $.post('{{ route('poin.updatepoin') }}', {
                    _token: "<?php echo csrf_token(); ?>",
                    id_tim: id_tim
                },
                function(data) {
                    if (data.status == 'oke') {
                        $('#isi_modal_update_poin').html(data.msg);
                    } else {
                        $('#isi_modal_update_poin').html('Failed to load data');
                    }
                }
            );
        }
    </script>

@endsection
