@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add New KAFA Activity Page</div>
  <div class="card-body">
      
      <form action="{{ route('admins.store') }}" method="POST">
        {!! csrf_field() !!}
        <label>ActivityName</label></br>
        <input type="text" name="ActivityName" id="ActivityName" class="form-control"></br>
        <label>Activity Location</label></br>
        <input type="text" name="ActivityLocation" id="ActivityLocation" class="form-control"></br>
        <label>Date</label></br>
        <input type="date" name="ActivityDate" id="ActivityDate" class="form-control"></br> 
        <label>Time</label></br>
        <input type="time" name="ActivityTime" id="ActivityTime" class="form-control"></br>
        <label>Activity Description</label></br>  
        <input type="text" name="ActivityDesc" id="ActivityDesc" class="form-control"></br>
        <label>Activity Mode</label></br>     
        <input type="text" name="ActivityMode" id="ActivityMode" class="form-control"></br>
        <label>Activity Period</label></br>
        <input type="text" name="ActivityPeriod" id="ActivityPeriod" class="form-control"></br>      
        <label>Activity Status</label></br>
        <input type="text" name="ActivityStatus" id="ActivityStatus" class="form-control"></br>  
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop