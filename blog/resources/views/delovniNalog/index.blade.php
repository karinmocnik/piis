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
            @foreach($delovninalogi as $delovninalog)
                <tr>
                    <td>{{$delovninalog["DELOVNI_NALOG_ID"]}}</td>
                    <td>{{$delovninalog["KUPEC_ID"]}}</td>
                    <td>{{$delovninalog["OPERACIJA_ID"]}}</td>
                    <td>{{$delovninalog["STEVILO_OPERACIJ"]}}</td>
                    <td>{{$delovninalog["DATUM_LANSIRANJA"]}}</td>
                    <td>{{$delovninalog["STATUS_DN"]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    </div>
@endsection