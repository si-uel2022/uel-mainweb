@extends('admin.layout')

@section('title', 'Admin')

@section('content')

    <h1 class="text-center">Update Poin PUBG</h1>
    <br><br>

    <select class="form-select" id="selectWeek">
        <option value="1" selected>Week 1</option>
        <option value="2">Week 2</option>
        <option value="3">Week 3</option>
    </select>

    <select class="form-select" id="selectDay">
        <option value="1" selected>Day 1</option>
        <option value="2">Day 2</option>
    </select>


    <a class="btn btn-primary" data-toggle="modal" onclick="findMatchPUBG()">Cari</a>

    <br><br>

    <div class="row">
        <div class="col">
            <table class="table table-hover table-dark">
                <thead class="text-center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Tim</th>
                        <th scope="col">Placement Point</th>
                        <th scope="col">Kill Point</th>
                        <th scope="col">Total Point</th>
                        <th scope="col">WWCD</th>
                        <th scope="col" text-align="center">Update Point</th>
                    </tr>
                </thead>
                <tbody id="contenttable">
                    @foreach ($tim as $t)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $t->nama }}</td>
                            <td>{{ $t->placement_poin }}</td>
                            <td>{{ $t->kill_poin }}</td>
                            <td>{{ $t->total_poin }}</td>
                            <td>{{ $t->wwcd }}</td>
                            <td>
                                <a href="#modal_update_poin" class="btn btn-outline-success" data-toggle="modal"
                                    onclick="getDataFirst({{ $t->id }})">Update Poin</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- ini popup utk btn update /ajax --}}
    <div class="modal fade" id="modal_update_poin" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Update Poin </h4>
                </div>
                <div class="modal-body" id="isi_modal_update_poin">
                    --form update--
                </div>
            </div>
        </div>
    </div>
    {{-- end ini popup utk btn edit --}}

    <script>
        function getDataFirst(id_tim) {
            $('#isi_modal_update_poin').html('loading...');
            var week = $('#selectWeek').val();
            var day = $('#selectDay').val();

            $.post('{{ route('poin.updatepoin_PUBG') }}', {
                    _token: "<?php echo csrf_token(); ?>",
                    id_tim: id_tim,
                    week: week,
                    day: day
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

        function findMatchPUBG() {
            $('#contenttable').html('loading...');
            var week = $('#selectWeek').val();
            var day = $('#selectDay').val();

            $.post('{{ route('match.pubg') }}', {
                    _token: "<?php echo csrf_token(); ?>",
                    week: week,
                    day: day,
                },
                function(data) {
                    if (data.status == 'oke') {
                        var table = $("#contenttable");
                        table.html("");
                        for (var i = 0; i < data.tim.length; i++) {
                            table.append(
                                "<tr class='text-center'>" + 
                                    '<td>'+ parseInt(i+1) +'</td>'  + 
                                    '<td>'+ data.tim[i]['nama'] +'</td>'  + 
                                    '<td>'+ data.tim[i]['placement_poin'] +'</td>'  + 
                                    '<td>'+ data.tim[i]['kill_poin'] +'</td>'  + 
                                    '<td>'+ data.tim[i]['total_poin'] +'</td>'  + 
                                    '<td>'+ data.tim[i]['wwcd'] +'</td>' + 
                                    '<td><a href="#modal_update_poin" class="btn btn-outline-success" data-toggle="modal"onclick="getDataFirst('+ data.tim[i]['id'] +')">Update Poin</a></td>' +
                                '</tr>'
                            );
                        }
                    } else {
                        $('#isi_modal_update_poin').html('Failed to load data');
                    }
                }
            );
        }
    </script>

@endsection
