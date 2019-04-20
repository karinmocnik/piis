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
        <label for="NAZIV">Naziv</label>
        <input type="text" class="form-control" id="NAZIV" name="NAZIV" placeholder="Naziv">
    </div>
    <div class="form-group">
        <label for="DDV_ID">DDV</label>
        <input type="text" class="form-control" id="DDV_ID" name="DDV_ID" placeholder="DDV">
    </div>

    <button type="submit" class="btn btn-primary">Dodaj</a>
</form>

@endsection