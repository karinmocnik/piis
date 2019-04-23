@extends('master')

@section('content')
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Delovni Nalog</h1>
        
        <a href="{{route('delovniNalog.create')}}" class="btn btn-success" style="float: right">Dodaj delovni nalog</a>
        <br><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kupec ID</th>
                    <th scope="col">Operacija ID</th>
                    <th scope="col">Število operacij</th>
                    <th scope="col">Datum lansiranja</th>
                    <th scope="col">Status DN</th>
                </tr>
            </thead>
            <tbody>
            @foreach($delovni_nalogi as $delovni_nalog)
                <tr>
                    <td>{{$delovni_nalog["DELOVNI_NALOG_ID"]}}</td>
                    <td>{{$delovni_nalog["KUPEC_ID"]}}</td>
                    <td>{{$delovni_nalog["OPERACIJA_ID"]}}</td>
                    <td>{{$delovni_nalog["STEVILO_OPERACIJ"]}}</td>
                    <td>{{$delovni_nalog["DATUM_LANSIRANJA"]}}</td>
                    <td>{{$delovni_nalog["STATUS_DN"]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    </div>
@endsection