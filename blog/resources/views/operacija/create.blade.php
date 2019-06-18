@extends('master')

@section('content')

<h1 style="margin-top: 20px; margin-bottom: 20px;">Dodajanje: Operacije</h1>
        
<a href="{{route('operacija.index')}}" class="btn btn-success" style="float: right">Nazaj</a>
<br><br>

@if(\Session::has('success'))
<div class="alert alert-success">
    {{ \Session::get('success')}}
</div>
@endif

<form method="POST" action="{{url('operacija')}}">
    @csrf
    <div class="form-group">
        <label for="NAZIV_OPERACIJE">Naziv operacije</label>
        <input type="text" class="form-control" id="NAZIV_OPERACIJE" name="NAZIV_OPERACIJE" placeholder="Naziv Operacije">
    </div>
    <!--
    <div class="form-group">
        <label for="OPERACIJA_ID">operacija ID</label>
        <input type="text" class="form-control" id="OPERACIJA_ID" name="OPERACIJA_ID" placeholder="Operacija ID">
    </div> 
    -->
    <div class="form-group">
        <label for="MINUT_ZA_KOS">Minut za kos</label>
        <input type="number" class="form-control" id="MINUT_ZA_KOS" name="MINUT_ZA_KOS" placeholder="Minut za kos">
    </div>

    <div class="form-group">
        <label for="OPOMBA1">Opomba 1</label>
        <input type="text" class="form-control" id="OPOMBA1" name="OPOMBA1" >
    </div>
    <div class="form-group">
        <label for="OPOMBA2">Opomba 2</label>
        <input type="text" class="form-control" id="OPOMBA2" name="OPOMBA2" >
    </div>

    <button type="submit" class="btn btn-primary">Dodaj</a>
</form>

@endsection