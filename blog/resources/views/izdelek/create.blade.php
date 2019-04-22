@extends('master')

@section('content')

<h1 style="margin-top: 20px; margin-bottom: 20px;">Dodajanje: Izdelek</h1>
        
<a href="{{route('izdelek.index')}}" class="btn btn-success" style="float: right">Nazaj</a>
<br><br>

@if(\Session::has('success'))
<div class="alert alert-success">
    {{ \Session::get('success')}}
</div>
@endif

<form method="POST" action="{{url('izdelek')}}">
    @csrf
    <div class="form-group">
        <label for="IPS">IPS</label>
        <input type="number" class="form-control" id="IPS" name="IPS" placeholder="IPS">
    </div>
    <div class="form-group">
        <label for="NAZIV">NAZIV</label>
        <input type="text" class="form-control" id="NAZIV" name="NAZIV" placeholder="NAZIV">
    </div>
    <div class="form-group">
        <label for="PL_CENA">PL CENA</label>
        <input type="text" class="form-control" id="PL_CENA" name="PL_CENA" placeholder="PL_CENA">
    </div>
    <div class="form-group">
        <label for="ENM">ENM</label>
        <input type="text" class="form-control" id="ENM" name="ENM" placeholder="ENM">
    </div>
    <div class="form-group">
        <label for="ZALOGA">Zaloga</label>
        <input type="text" class="form-control" id="ZALOGA" name="ZALOGA" placeholder="ZALOGA">
    </div>
    <div class="form-group">
        <label for="OZN">OZN</label>
        <input type="text" class="form-control" id="OZN" name="OZN" placeholder="OZN">
    </div>
    <div class="form-group">
        <label for="LPE">LPE</label>
        <input type="text" class="form-control" id="LPE" name="LPE" placeholder="LPE">
    </div>
    <div class="form-group">
        <label for="ND">ND</label>
        <input type="text" class="form-control" id="ND" name="ND" placeholder="ND">
    </div>
    <div class="form-group">
        <label for="DATUM_ZALOG">DATUM_ZALOG</label>
        <input type="text" class="form-control" id="DATUM_ZALOG" name="DATUM_ZALOG" placeholder="DATUM_ZALOG">
    </div>
    <div class="form-group">
        <label for="VGRAD">VGRAD</label>
        <input type="text" class="form-control" id="VGRAD" name="VGRAD" placeholder="VGRAD">
    </div>


    <button type="submit" class="btn btn-primary">Dodaj</a>
</form>

@endsection