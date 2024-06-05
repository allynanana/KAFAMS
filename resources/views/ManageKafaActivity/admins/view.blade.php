@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Activity details Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Activity Name : {{ $admins ->ActivityName }}</h5>
        <p class="card-text">Activity Location : {{ $admins->ActivityLocation }}</p>
        <p class="card-text">Date : {{ $admins->ActivityDate }}</p>
        <p class="card-text">Time : {{ $admins->ActivityTime }}</p>
        <p class="card-text">Activity Description : {{ $admins->ActivityDesc }}</p>
        <p class="card-text">Activity Period : {{ $admins->ActivityPeriod}}</p>
        <p class="card-text">Activity Mode : {{ $admins->ActivityMode }}</p>
        <p class="card-text">Activity Status : {{$admins->ActivityStatus }}</p>
  </div>
       
    </hr>
  
  </div>
</div>

@endsection
