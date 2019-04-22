@extends('master')

@section('content')
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Operacije</h1>
        
        <a href="{{route('operacija.create')}}" class="btn btn-success" style="float: right">Dodaj operacijo</a>
        <br><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Naziv operacije</th>
                    <th scope="col">Minut za kos</th>
                    <th scope="col">Opomba 1</th>
                    <th scope="col">Opomba 2</th>
                </tr>
            </thead>
            <tbody>
            @foreach($operacije as $operacija)
                <tr>
                    <td>{{$operacija["OPERACIJA_ID"]}}</td>
                    <td>{{$operacija["NAZIV_OPERACIJE"]}}</td>
                    <td>{{$operacija["MINUT_ZA_KOS"]}}</td>
                    <td>{{$operacija["OPOMBA1"]}}</td>
                    <td>{{$operacija["OPOMBA2"]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    </div>
@endsection