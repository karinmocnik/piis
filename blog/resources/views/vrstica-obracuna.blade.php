@extends('master')

@section('content')
    <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Vrstica Obračuna</h1>
    
    <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ime</th>
                    <th scope="col">Priimek</th>
                    <th scope="col">Norma</th>
                </tr>
            </thead>
            <tbody>
            @foreach($delavci as $delavec)
                <tr>
                    <td>{{$delavec["DELAVEC_ID"]}}</td>
                    <td>{{$delavec["IME"]}}</td>
                    <td>{{$delavec["PRIIMEK"]}}</td>
                    <td>{{$delavec["NORMA"]}}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    
@endsection