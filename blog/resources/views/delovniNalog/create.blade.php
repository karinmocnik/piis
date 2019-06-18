@extends('master')

@section('content')

<h1 style="margin-top: 20px; margin-bottom: 20px;">Dodajanje: Delovni Nalog</h1>
        
<a href="{{route('delovniNalog.index')}}" class="btn btn-success" style="float: right">Nazaj</a>
<br><br>

@if(\Session::has('success'))
<div class="alert alert-success">
    {{ \Session::get('success')}}
</div>
@endif

<form method="POST" action="{{url('delovniNalog')}}">
    @csrf
    <div class="form-group">
        <label for="DELOVNI_NALOG_ID">Delovni nalog ID</label>
        <input type="number" class="form-control" id="DELOVNI_NALOG_ID" name="DELOVNI_NALOG_ID" placeholder="delovni nalog ID">
    </div>
    <div class="form-group">
        <label for="KUPEC_ID">kupec ID</label>
        <input type="number" class="form-control" id="KUPEC_ID" name="KUPEC_ID" placeholder="kupec ID">
    </div>
       <div class="form-group">
        <label for="OPERACIJA_ID">operacija ID</label>
        <input type="number" class="form-control" id="OPERACIJA_ID" name="OPERACIJA_ID" placeholder="OPERACIJA_ID">
    </div>
    <div class="form-group">
        <label for="STEVILO_OPERACIJ">število operacij</label>
        <input type="number" class="form-control" id="STEVILO_OPERACIJ" name="STEVILO_OPERACIJ" placeholder="STEVILO_OPERACIJ">
    </div>
    <div class="form-group">
        <label for="DATUM_LANSIRANJA">datum lansiranja</label>
        <input type="date" class="form-control" id="DATUM_LANSIRANJA" name="DATUM_LANSIRANJA" placeholder="YYYY-MM-DD">
    </div>
    <div class="form-group">
        <label for="STATUS_DN">status DN</label>
        <input type="text" class="form-control" id="STATUS_DN" name="STATUS_DN" placeholder="ZAKLJUČEN / V TEKU">
    </div>


    <button type="submit" class="btn btn-primary">Dodaj</a>
</form>

@endsection