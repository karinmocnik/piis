@extends('master')

@section('content')
        <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Delavci</h1>
        
        <a href="{{route('delavec.create')}}" class="btn btn-success" style="float: right">Dodaj delavca</a>
        <br><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ime</th>
                    <th scope="col">Priimek</th>
                    <th scope="col">Minut v izmeni</th>
                    <th scope="col">Minut priznano dodatno</th>
                    <th scope="col">Minut preostali čas</th>
                    <th scope="col">Uporabniško ime</th>
                    <th scope="col">Vodja ID</th>  
                </tr>
            </thead>
            <tbody>
            @foreach($delavci as $delavec)
                <tr>
                    <td>{{$delavec["DELAVEC_ID"]}}</td>
                    <td>{{$delavec["IME"]}}</td>
                    <td>{{$delavec["PRIIMEK"]}}</td>
                    <td>{{$delavec["MINUT_V_IZMENI"]}}</td>
                    <td>{{$delavec["MINUT_PRIZNANO_DODATNO"]}}</td>
                    <td>{{$delavec["MINUT_PREOSTALI_CAS"]}}</td>
                    <td>{{$delavec["UPORABNISKO_IME"]}}</td>
                    <td>{{$delavec["VODJA_ID"]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Content here -->
    </div>
@endsection