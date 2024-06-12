@extends('layout') <!-- Extends the layout blade template -->
@section('content') <!-- Defines the content section -->

<div class="card">
  <div class="card-header">Add New KAFA Activity Page</div> <!-- Card header -->

  <div class="card-body">
      
      <!-- Form to add a new KAFA activity -->
      <form action="{{ route('admins.store') }}" method="POST">
        {!! csrf_field() !!} <!-- CSRF token for security -->
        
        <!-- Input for Activity Name -->
        <label>Activity Name</label></br>
        <input type="text" name="ActivityName" id="ActivityName" class="form-control"></br>
        
        <!-- Input for Activity Location -->
        <label>Activity Location</label></br>
        <input type="text" name="ActivityLocation" id="ActivityLocation" class="form-control"></br>
        
        <!-- Input for Activity Date -->
        <label>Date</label></br>
        <input type="date" name="ActivityDate" id="ActivityDate" class="form-control"></br>
        
        <!-- Input for Activity Time -->
        <label>Time</label></br>
        <input type="time" name="ActivityTime" id="ActivityTime" class="form-control"></br>
        
        <!-- Input for Activity Description -->
        <label>Activity Description</label></br>
        <input type="text" name="ActivityDesc" id="ActivityDesc" class="form-control"></br>
        
        <!-- Input for Activity Mode -->
        <label>Activity Mode</label></br>
        <input type="text" name="ActivityMode" id="ActivityMode" class="form-control"></br>
        
        <!-- Input for Activity Period -->
        <label>Activity Period</label></br>
        <input type="text" name="ActivityPeriod" id="ActivityPeriod" class="form-control"></br>
        
        <!-- Input for Activity Status -->
        <label>Activity Status</label></br>
        <input type="text" name="ActivityStatus" id="ActivityStatus" class="form-control"></br>
        
        <!-- Submit button -->
        <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
   
  </div>
</div>
 
@stop <!-- End of content section -->
