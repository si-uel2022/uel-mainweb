@extends("main.layout")

@section("content")
<div class="klasemen-bigtext">KLASEMEN</div>
<table>
    <thead>
        <tr class="klasemen-table-header">
            <th>Rank</th>
            <th>Team</th>
            <th>Game</th>   
            <th>W/L</th>   
            <th>Poin</th>   
            <th>Team Kill</th>   
        </tr>
    </thead>
    <tbody>
        <tr class="klasemen-table">
            <td>1</td>
            <td>Lorem Ipsum</td>
            <td>10</td>
            <td>1/2</td>
            <td>30</td>
            <td>40</td>
        </tr>
    </tbody>
</table>

@endsection