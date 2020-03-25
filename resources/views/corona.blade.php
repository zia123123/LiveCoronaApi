@extends('layouts.app')

@section('content')


<a style="margin-left: 80px; font-weight: bold; font-size: 15px;"> Last Update : {{ $last_update }}</a>

<div class="container" style="padding: 20px; width: 100%; margin-top: auto;
margin-bottom: auto;">
  <div class="row">
    <div class="col p-4 mb-4 bg-primary text-white rounded" style="margin-right: 10px; width: 40%;">
    	<div class="row">	
      <i class="fa fa-hospital-o fa-5x" style="margin-right: 40px; font-size: 50px"></i><div style="font-size: 25px;">Total Kasus : <br> <a style="font-weight: bold; font-size: 28px;">{{ $jumlahKasus }} </a> </div></div><br>	
    </div>
   <div class="col p-4 mb-4 bg-info text-white rounded">
     <div class="row">	
      <i class="fa fa-calendar-plus-o fa-3x" style="margin-right: 40px; font-size: 50px"></i><div style="font-size: 23px;">Kasus Hari ini : <br> <a style="font-weight: bold; font-size: 28px;">{{ $kasusHariIni }} </a> </div></div>
    </div>
   
  </div>
   <div class="row">
    <div class="col p-4 mb-4 bg-danger text-white rounded" style="margin-right: 10px;width: 40%;"; > <div class="row">	
      <i class="fa fa-plus-square fa-5x" style="margin-right: 40px; font-size: 50px"></i><div style="font-size: 22px;">Meninggal : <br> <a style="font-weight: bold; font-size: 28px;">{{ $mati }} </a> </div></div>
    
    </div>
   <div class="col p-4 mb-4 bg-success text-white rounded">
     <div class="row">	
      <i class="fa fa-heart fa-5x" style="margin-right: 40px; font-size: 50px;"></i><div style="font-size: 22px;">Sembuh : <br> <a style="font-weight: bold; font-size: 28px;">{{ $sembuh }} </a> </div></div>
    </div> 
   
  </div>
  <div class="row">
    <div class="col p-4 mb-4 bg-secondary text-white rounded" style="margin-right: 10px; width: 40%;"; > <div class="row">	
      <i class="fa fa-exclamation-circle e fa-5x" style="margin-right: 40px; font-size: 50px"></i><div style="font-size: 22px;">Critis : <br> <a style="font-weight: bold;font-size: 28px;">{{ $critis }} </a> </div></div>
    
    </div>
   <div class="col p-4 mb-4 bg-dark text-white rounded">
     <div class="row">	
      <i class="fa fa-heartbeat fa-5x" style="margin-right: 40px; font-size: 50px;"></i><div style="font-size: 22px;">Active : <br> <a style="font-weight: bold;font-size: 28px;">{{ $active }} </a> </div></div>
    </div>
  </div>
  	<center>	
	<a style=" font-weight: bold; font-size: 15px;">Created By Zia Muhammad <br> Multimedia Research Laboratory<br> PK Hima Telkom University, Pemuda Persis Baleendah  </a>
	</center>

@endsection
