@extends('master')

@section('content')
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Izdelki z opisom</h1>
        
        <a href="{{route('izdelek.create')}}" class="btn btn-success" style="float: right">Dodaj izdelek</a>
        <br><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">IPS</th>
                    <th scope="col">Naziv</th>
                    <th scope="col">PL cena</th>
                    <th scope="col">ENIM</th>
                    <th scope="col">Zaloga</th>
                    <th scope="col">OZN</th>
                    <th scope="col">LPE</th>
                    <th scope="col">ND</th>
                    <th scope="col">Datum zalog</th>
                    <th scope="col">VGRAD</th>
                    <th scope="col">AKCIJA</th>
                </tr>
            </thead>
            <tbody>
            @foreach($izdelki as $izdelek)
                <tr>
                    <td>{{$izdelek["IPS"]}}</td>
                    <td>{{$izdelek["NAZIV"]}}</td>
                    <td>{{$izdelek["PL_CENA"]}}</td>
                    <td>{{$izdelek["ENM"]}}</td>
                    <td>{{$izdelek["ZALOGA"]}}</td>
                    <td>{{$izdelek["OZN"]}}</td>
                    <td>{{$izdelek["LPE"]}}</td>
                    <td>{{$izdelek["ND"]}}</td>
                    <td>{{$izdelek["DATUM_ZALOG"]}}</td>
                    <td>{{$izdelek["VGRAD"]}}</td>
                    <td>
                        <a href="{{route('izdelek_opis.show', $izdelek['IPS'])}}">podrobnosti</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    </div>
@endsection