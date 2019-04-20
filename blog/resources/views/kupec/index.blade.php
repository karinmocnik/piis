@extends('master')

@section('content')
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Kupci</h1>
        
        <a href="{{route('kupec.create')}}" class="btn btn-success" style="float: right">Dodaj kupca</a>
        <br><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Naziv</th>
                    <th scope="col">DDV ID</th>
                </tr>
            </thead>
            <tbody>
            @foreach($kupci as $kupec)
                <tr>
                    <td>{{$kupec["KUPEC_ID"]}}</td>
                    <td>{{$kupec["NAZIV"]}}</td>
                    <td>{{$kupec["DDV_ID"]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    </div>
@endsection