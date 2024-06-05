@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
  <form action="{{ route('admins.update', $admins->id) }}" method="POST">
        {!! csrf_field() !!}
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{$admins->id}}" id="id" />
        <label>Activity Name</label></br>
        <input type="text" name="ActivityName" id="ActivityName" value="{{$admins->ActivityName}}" class="form-control"></br>
        <label>Activity Location</label></br>
        <input type="text" name="ActivityLocation" id="ActivityLocation" value="{{$admins->ActivityLocation}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="date" name="ActivityDate" id="ActivityDate" value="{{$admins->ActivityDate}}" class="form-control"></br>
        <label>Time</label></br>
        <input type="time" name="ActivityTime" id="ActivityTime" value="{{$admins->ActivityTime}}" class="form-control"></br>
        <label>Activity Description</label></br>
        <input type="text" name="ActivityDesc" id="ActivityDesc" value="{{$admins->ActivityDesc}}" class="form-control"></br>
        <label>Activity Mode</label></br>
        <select name="ActivityMode" id="ActivityMode" class="form-control">
            <option value="Online" {{ $admins->ActivityMode == 'Online' ? 'selected' : '' }}>Online</option>
            <option value="F2F" {{ $admins->ActivityMode == 'F2F' ? 'selected' : '' }}>F2F</option>
        </select></br>   
        <label>Activity Period</label></br>
        <input type="text" name="ActivityPeriod" id="ActivityPeriod" value="{{$admins->ActivityPeriod}}" class="form-control"></br>
        <label>Activity Status</label></br>
        <select name="ActivityStatus" id="ActivityStatus" class="form-control">
            <option value="Completed" {{ $admins->ActivityStatus == 'Completed' ? 'selected' : '' }}>Completed</option>
            <option value="Not Completed" {{ $admins->ActivityStatus == 'Not Completed' ? 'selected' : '' }}>Not Completed</option>
            <option value="Postponed" {{ $admins->ActivityStatus == 'PostPoned' ? 'selected' : '' }}>PostPoned</option>       
        </select></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop
