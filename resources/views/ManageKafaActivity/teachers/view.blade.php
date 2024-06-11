@extends('layout')
@section('content')
 
<!-- Main Card Container -->
<div class="card">
    <!-- Card Header with Title -->
    <div class="card-header">Activity details Page</div>

    <!-- Card Body -->
    <div class="card-body">
        <!-- Activity Details Section -->
        <div class="card-body">
            <!-- Activity Name -->
            <h5 class="card-title">Activity Name : {{ $teachers->ActivityName }}</h5>
            <!-- Activity Location -->
            <p class="card-text">Activity Location : {{ $teachers->ActivityLocation }}</p>
            <!-- Activity Date -->
            <p class="card-text">Date : {{ $teachers->ActivityDate }}</p>
            <!-- Activity Time -->
            <p class="card-text">Time : {{ $teachers->ActivityTime }}</p>
            <!-- Activity Description -->
            <p class="card-text">Activity Description : {{ $teachers->ActivityDesc }}</p>
            <!-- Activity Period -->
            <p class="card-text">Activity Period : {{ $teachers->ActivityPeriod }}</p>
            <!-- Activity Mode -->
            <p class="card-text">Activity Mode : {{ $teachers->ActivityMode }}</p>
            <!-- Activity Status -->
            <p class="card-text">Activity Status : {{ $teachers->ActivityStatus }}</p>
        </div>
    </div>
</div>

@endsection
