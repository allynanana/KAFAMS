@extends('layout') <!-- Extends the layout blade template -->
@section('content') <!-- Defines the content section -->

<div class="card">
  <div class="card-header">Add Student Information</div> <!-- Card header -->

  <div class="card-body">
      
      <!-- Form to add a new student -->
      <form action="{{ route('parents.store') }}" method="POST">
        @csrf <!-- CSRF token for security -->
        
        <!-- Input for Student Name -->
        <label>Student Name</label></br>
        <input type="text" name="StudentName" id="StudentName" class="form-control" required></br>
        
        <!-- Input for Student Gender -->
        <label>Student Gender</label></br>
        <select name="StudentGender" id="StudentGender" class="form-control" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select></br>
        
        <!-- Input for Student Age -->
        <label>Student Age</label></br>
        <input type="number" name="StudentAge" id="StudentAge" class="form-control" min="1" required></br>
        
        <!-- Input for Education Level -->
        <label>Education Level</label></br>
        <input type="text" name="EducationLevel" id="EducationLevel" class="form-control" required></br>
        
        <!-- Input for Emergency Contact -->
        <label>Emergency Contact</label></br>
        <input type="tel" name="EmergencyContact" id="EmergencyContact" class="form-control" required></br>
        
        <!-- Submit button -->
        <input type="submit" value="Save" class="btn btn-success"></br>

       


      </form>
   
  </div>
</div>
 
@endsection
