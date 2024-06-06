@extends('layout')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #bff6c3; color: black;">
        <h2>My Bookings</h2>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Activity Name</th>
                        <th>Class Mode</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $booking->activity->ActivityName ?? 'N/A' }}</td>
                            <td>{{ $booking->activity->ActivityMode ?? 'N/A' }}</td>
                            <td>{{ $booking->activity->ActivityDate ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('parents.cancel', $booking->id) }}" title="Cancel Booking">
                                    <button class="btn btn-warning btn-sm"><i class="fa fa-times" aria-hidden="true"></i> Cancel Booking</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
