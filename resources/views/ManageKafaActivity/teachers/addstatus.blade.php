@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
  <form action="{{ route('teachers.update', $teachers->id) }}" method="POST">
        {!! csrf_field() !!}
        @method('PATCH')
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
        <label>Activity Status</label></br>
        <select name="ActivityStatus" id="ActivityStatus" class="form-control">
            <option value="Completed" {{ $teachers->ActivityStatus == 'Completed' ? 'selected' : '' }}>Completed</option>
            <option value="Not Completed" {{ $teachers->ActivityStatus == 'Not Completed' ? 'selected' : '' }}>Not Completed</option>
            <option value="Postponed" {{ $teachers->ActivityStatus == 'PostPoned' ? 'selected' : '' }}>PostPoned</option>
            
        </select></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop
