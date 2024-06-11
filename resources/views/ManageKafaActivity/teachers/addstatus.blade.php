@extends('layout')

@section('content')

<!-- Card Container -->
<div class="card">
  <!-- Card Header -->
  <div class="card-header">Edit Page</div>
  
  <!-- Card Body -->
  <div class="card-body">
    
    <!-- Form -->
    <form action="{{ route('teachers.update', $teachers->id) }}" method="POST">
      <!-- CSRF Token -->
      {!! csrf_field() !!}
      
      <!-- Method Field (PATCH) -->
      @method('PATCH')
      
      <!-- Hidden Input for ID -->
      <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
      
      <!-- Activity Status Label -->
      <label>Activity Status</label></br>
      
      <!-- Dropdown for Activity Status -->
      <select name="ActivityStatus" id="ActivityStatus" class="form-control">
        <!-- Option for Completed -->
        <option value="Completed" {{ $teachers->ActivityStatus == 'Completed' ? 'selected' : '' }}>Completed</option>
        
        <!-- Option for Not Completed -->
        <option value="Not Completed" {{ $teachers->ActivityStatus == 'Not Completed' ? 'selected' : '' }}>Not Completed</option>
        
        <!-- Option for Postponed -->
        <option value="Postponed" {{ $teachers->ActivityStatus == 'PostPoned' ? 'selected' : '' }}>PostPoned</option>
      </select></br>
      
      <!-- Submit Button -->
      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>

@stop
