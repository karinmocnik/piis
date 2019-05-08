@extends('master')

@section('content')
    <h1 style="margin-top: 20px; margin-bottom: 20px;">Pregled: Kalkulacije</h1>
    
    <p> tukaj je potrebno poročilo na poizvedbi, ki vsebuje funkcijo izracuni.kalkulacija_oklep(p1,p2,p3)
7 </p>

        <form method="POST" action="{{url('kalkulacije')}}">
            @csrf
            
            <div class="form-group">
                <label for="IPS">Izdelek</label>
                <select class="form-control" id="IPS" name="IPS">
                    @foreach($izdelki as $izdelek)
                    <option value="{{$izdelek['IPS']}}">{{$izdelek['NAZIV']}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Izpis</a>
        </form>    
        
   
    </div>
@endsection