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
            @foreach($vrstice_obracunov as $vrstica_obracuna)
                <tr>
                    <td>{{$vrstica_obracuna["VRSTICA_OBRACUNA_ID"]}}</td>
                    <td>{{$vrstica_obracuna["DATUM_REALIZACIJE"]}}</td>
                    <td>{{$vrstica_obracuna["DATUM_VPISA"]}}</td>
                    <td>{{$vrstica_obracuna["DELAVEC_ID"]}}</td>
                    <td>{{$vrstica_obracuna["OPERACIJA_ID"]}}</td>
                    <td>{{$vrstica_obracuna["DELOVNI_NALOG_ID"]}}</td>
                    <td>{{$vrstica_obracuna["STEVILO_OPERACIJ"]}}</td>
                    <td>{{$vrstica_obracuna["MINUT_DELA"]}}</td>
                    <td>{{$vrstica_obracuna["MINUT_NENORMIRANO"]}}</td>
                    <td>{{$vrstica_obracuna["MINUT_ZASTOJ"]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    
@endsection