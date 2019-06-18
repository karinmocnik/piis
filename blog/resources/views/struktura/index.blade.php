@extends('master')

@section('content')
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Izdelki in struktura</h1>
        
        <a href="{{route('izdelek.create')}}" class="btn btn-success" style="float: right">Dodaj izdelek</a>
        <br><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">nadrejeni del ID</th>
                    <th scope="col">vgrajeni del ID</th>
                    <th scope="col">količina</th>
                </tr>
            </thead>
            <tbody>
            @foreach($strukture as $struktura)
                <tr>
                    <td>{{$struktura["NADREJENI_DEL_ID"]}}</td>
                    <td>{{$struktura["VGRAJENI_DEL_ID"]}}</td>
                    <td>{{$struktura["KOLICINA"]}}</td>
                   
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    </div>
@endsection