@extends('layout') 
@section('content')

<div class="card">
    <!-- Card Header -->
    <div class="card-header">Activity Details Page</div>
    <!-- Card Body -->
    <div class="card-body">
    
        <!-- Inner Card Body to display activity details -->
        <div class="card-body">
            <!-- Display Activity Name -->
            <h5 class="card-title">Activity Name : {{ $admins->ActivityName }}</h5>
            <!-- Display Activity Location -->
            <p class="card-text">Activity Location : {{ $admins->ActivityLocation }}</p>
            <!-- Display Activity Date -->
            <p class="card-text">Date : {{ $admins->ActivityDate }}</p>
            <!-- Display Activity Time -->
            <p class="card-text">Time : {{ $admins->ActivityTime }}</p>
            <!-- Display Activity Description -->
            <p class="card-text">Activity Description : {{ $admins->ActivityDesc }}</p>
            <!-- Display Activity Period -->
            <p class="card-text">Activity Period : {{ $admins->ActivityPeriod }}</p>
            <!-- Display Activity Mode -->
            <p class="card-text">Activity Mode : {{ $admins->ActivityMode }}</p>
            <!-- Display Activity Status -->
            <p class="card-text">Activity Status : {{ $admins->ActivityStatus }}</p>
        </div>


        </hr>

    </div>
</div>

@endsection
