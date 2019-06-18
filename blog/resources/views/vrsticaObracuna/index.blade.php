@extends('master')

@section('content')
    <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Vrstica Obračuna</h1>
    
    <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">vrstica obračuna ID</th>
                    <th scope="col">datum realizacije</th>
                    <th scope="col">datum vpisa</th>
                    <th scope="col">delavec ID</th>
                    <th scope="col">operacija ID</th>
                    <th scope="col">delovni nalog ID</th>
                    <th scope="col">število operacij</th>
                    <th scope="col">minut dela</th>
                    <th scope="col">minut nenormirano</th>
                    <th scope="col">minut zastoj</th>
                </tr>
            </thead>
            <tbody>
            @foreach($obracuni as $obracun)
                <tr>
                    <td>{{$obracun["VRSTICA_OBRACUNA_ID"]}}</td>
                    <td>{{$obracun["DATUM_REALIZACIJE"]}}</td>
                    <td>{{$obracun["DATUM_VPISA"]}}</td>
                    <td>{{$obracun["DELAVEC_ID"]}}</td>
                    <td>{{$obracun["OPERACIJA_ID"]}}</td>
                    <td>{{$obracun["DELOVNI_NALOG_ID"]}}</td>
                    <td>{{$obracun["STEVILO_OPERACIJ"]}}</td>
                    <td>{{$obracun["MINUT_DELA"]}}</td>
                    <td>{{$obracun["MINUT_NENORMIRANO"]}}</td>
                    <td>{{$obracun["MINUT_ZASTOJ"]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    
@endsection