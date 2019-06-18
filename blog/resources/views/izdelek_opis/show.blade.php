@extends('master')

@section('content')
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Izdelek z opisom - {{$izdelek['NAZIV']}}</h1>
        
        <table class="table table-hover">
            <tr>
                <td><b>ORIGINALNO IME</b></td>
                <td>{{$opis['ORIGINALNO_IME']}}</td>
            </tr> 
            <tr>
                <td><b>IPS</b></td>
                <td>{{$izdelek['IPS']}}</td>
            </tr>
            <tr>
                <td><b>PL cena</b></td>
                <td>{{$izdelek['PL_CENA']}}</td>
            </tr>
            <tr>
                <td><b>Slika in video</b></td>
                <td>{{$izdelek['Slika_video']}}</td>
            </tr>
            <tr>
                <td><b>Opis izdelka ID</b></td>
                <td>{{$opis['Opis_izdelka_ID']}}</td>
            </tr>
            <tr>
                <td><b>mime_type</b></td>
                <td>{{$opis['mime_type']}}</td>
            </tr>
            <tr>
                <td><b>datum kreiranja</b></td>
                <td>{{$izdelek['datum_kreiranja']}}</td>
            </tr>
            <tr>
                <td><b>datum zadnje spremembe</b></td>
                <td>{{$opis['datum_zadnje_spremembe']}}</td>
            </tr>
            <tr>
                <td><b>nabor zankov</b></td>
                <td>{{$opis['nabor_znakov']}}</td>
            </tr>
        </table>
    </div>
@endsection