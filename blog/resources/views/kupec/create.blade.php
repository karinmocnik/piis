@extends('master')

@section('content')

<h1 style="margin-top: 20px; margin-bottom: 20px;">Dodajanje: Kupci</h1>
        
<a href="{{route('kupec.index')}}" class="btn btn-success" style="float: right">Nazaj</a>
<br><br>

@if(\Session::has('success'))
<div class="alert alert-success">
    {{ \Session::get('success')}}
</div>
@endif

<form method="POST" action="{{url('kupec')}}">
    @csrf
    <div class="form-group">
        <label for="PRIIMEK">Priimek</label>
        <input type="text" class="form-control" id="PRIIMEK" name="PRIIMEK" placeholder="Priimek">
    </div>
    <div class="form-group">
        <label for="IME">Ime</label>
        <input type="text" class="form-control" id="IME" name="IME" placeholder="Ime">
    </div>
    <div class="form-group">
        <label for="VODJA_ID">Vodja</label>
        <select class="form-control" id="VODJA_ID" name="VODJA_ID">
            @foreach($delavci as $delavec)
            <option value="{{$delavec['DELAVEC_ID']}}">{{$delavec['IME']}} {{$delavec['PRIIMEK']}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="UPORABNISKO_IME">Uporabniško ime</label>
        <input type="text" class="form-control" id="UPORABNISKO_IME" name="UPORABNISKO_IME" placeholder="uporabnisko_ime">
    </div>
    <div class="form-group">
        <label for="GESLO">Geslo</label>
        <input type="password" class="form-control" id="GESLO" name="GESLO" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Dodaj</a>
</form>

@endsection