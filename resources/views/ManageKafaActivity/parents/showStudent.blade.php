@extends('layout') <!-- Extends the layout blade template -->
@section('content') <!-- Defines the content section -->

<div class="card">
  <div class="card-header">Student Details</div> <!-- Card header -->

  <div class="card-body">
    <p><strong>Student Name:</strong> {{ $student->StudentName }}</p>
    <p><strong>Student Gender:</strong> {{ ucfirst($student->StudentGender) }}</p>
    <p><strong>Student Age:</strong> {{ $student->StudentAge }}</p>
    <p><strong>Education Level:</strong> {{ $student->EducationLevel }}</p>
    <p><strong>Emergency Contact:</strong> {{ $student->EmergencyContact }}</p>
  </div>
</div>

@endsection
