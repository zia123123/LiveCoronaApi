@extends('layouts.app')

@section('content')


<a style="margin-left: 50px; font-weight: bold; font-size: 30px;"> Last Update : {{ $last_update }}</a>

<div class="container">
  <div class="row">
    <div class="col-8 p-4 mb-4 bg-primary text-white rounded" style="margin-right: 10px">
        <div class="row">   
      <i class="fa fa-hospital-o fa-5x" style="margin-right: 40px; font-size: 100px"></i><div style="font-size: 30px;">Total Kasus : <br> <a style="font-weight: bold; font-size: 70px;">{{ $jumlahKasus }} </a> </div></div><br>   
    </div>
   <div class="col-sm p-4 mb-4 bg-info text-white rounded">
     <div class="row">  
      <i class="fa fa-calendar-plus-o fa-3x" style="margin-right: 40px; font-size: 100px"></i><div style="font-size: 30px;">Kasus Hari ini : <br> <a style="font-weight: bold; font-size: 70px;">{{ $kasusHariIni }} </a> </div></div>
    </div>
   
  </div>
   <div class="row">
    <div class="col-sm p-4 mb-4 bg-danger text-white rounded" style="margin-right: 10px"; > <div class="row">   
      <i class="fa fa-plus-square fa-5x" style="margin-right: 40px; font-size: 100px"></i><div style="font-size: 30px;">Meninggal : <br> <a style="font-weight: bold; font-size: 70px;">{{ $mati }} </a> </div></div>
    
    </div>
   <div class="col-sm p-4 mb-4 bg-success text-white rounded">
     <div class="row">  
      <i class="fa fa-heart fa-5x" style="margin-right: 40px; font-size: 100px"></i><div style="font-size: 30px;">Sembuh : <br> <a style="font-weight: bold; font-size: 70px;">{{ $sembuh }} </a> </div></div>
    </div>
   
  </div>
  <div class="row">
    <div class="col-sm p-4 mb-4 bg-warning text-white rounded" style="margin-right: 10px"; > <div class="row">  
      <i class="fa fa-exclamation-circle e fa-5x" style="margin-right: 40px; font-size: 100px"></i><div style="font-size: 30px;">Critis : <br> <a style="font-weight: bold; font-size: 70px;">{{ $critis }} </a> </div></div>
    
    </div>
   <div class="col-sm p-4 mb-4 bg-dark text-white rounded">
     <div class="row">  
      <i class="fa fa-heartbeat fa-5x" style="margin-right: 40px; font-size: 100px"></i><div style="font-size: 30px;">Active : <br> <a style="font-weight: bold; font-size: 70px;">{{ $active }} </a> </div></div>
    </div>
   
  </div>

    
@endsection
