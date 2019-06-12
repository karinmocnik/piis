@extends('master')

@section('content')
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Izdelki in Operacije</h1>
        
        <a href="{{route('izdelek.create')}}" class="btn btn-success" style="float: right">Dodaj izdelek</a>
        <br><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Izdelek ID</th>
                    <th scope="col">Operacija ID</th>
                    <th scope="col">zaporedje</th>
                </tr>
            </thead>
            <tbody>
            @foreach($izdelki as $izdelek)
            <tr>
                    <td>{{$izdelek["IPS"]}}</td>
                   

                   
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    </div>
@endsection