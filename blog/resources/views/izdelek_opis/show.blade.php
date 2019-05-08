@extends('master')

@section('content')
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Izdelek z opisom - {{$izdelek['NAZIV']}}</h1>
        
        <table class="table table-hover">
            <tr>
                <td><b>PL_CENA</b></td>
                <td>{{$izdelek['PL_CENA']}}</td>
            </tr>
            <tr>
                <td><b>ENM</b></td>
                <td>{{$izdelek['ENM']}}</td>
            </tr>

            <tr>
                <td><b>ORIGINALNO_IME</b></td>
                <td>{{$opis['ORIGINALNO_IME']}}</td>
            </tr>
        </table>
    </div>
@endsection