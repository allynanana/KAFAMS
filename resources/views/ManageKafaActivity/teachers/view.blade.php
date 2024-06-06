@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Activity details Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Activity Name : {{ $teachers ->ActivityName }}</h5>
        <p class="card-text">Activity Location : {{ $teachers->ActivityLocation }}</p>
        <p class="card-text">Date : {{ $teachers->ActivityDate }}</p>
        <p class="card-text">Time : {{ $teachers->ActivityTime }}</p>
        <p class="card-text">Activity Description : {{ $teachers->ActivityDesc }}</p>
        <p class="card-text">Activity Period : {{ $teachers->ActivityPeriod}}</p>
        <p class="card-text">Activity Mode : {{ $teachers->ActivityMode }}</p>
        <p class="card-text">Activity Status : {{$teachers->ActivityStatus }}</p>
  </div>
       
    </hr>
  
  </div>
</div>

@endsection