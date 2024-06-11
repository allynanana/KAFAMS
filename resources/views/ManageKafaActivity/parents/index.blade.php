@extends('layout')
@section('content')

<div class="card shadow-lg">
    <!-- Card Header -->
    <div class="card-header" style="background-color: #bff6c3; color: black;">
        <h2 class="text-center">KAFA Activity</h2>
    </div>

    <!-- Card Body -->
    <div class="card-body">
        <!-- Top Controls: My Booking Button and Search Form -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <!-- My Booking Button -->
                <a href="{{ route('parents.viewBooking') }}" class="btn btn-info btn-sm mr-2" title="My Booking">
                    <i class="fa fa-calendar-check" aria-hidden="true"></i> My Booking
                </a>
            </div>
            <!-- Search Form -->
            <form class="form-inline" type="get" action="/search">
                <div class="input-group">
                    <!-- Search Input -->
                    <input class="form-control" name="search" type="search" placeholder="Activity Name" value="{{ isset($search) ? $search : '' }}" aria-label="Search">
                    <div class="input-group-append">
                        <!-- Search Button -->
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Activity Table -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <!-- Table Head -->
                <thead class="thead-dark text-center">
                    <tr>
                        <th>#</th>
                        <th>Activity Name</th>
                        <th>Class Mode</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                    @foreach($kafaactivities as $item)
                        <tr>
                            <!-- Iteration Number -->
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <!-- Activity Details -->
                            <td>{{ $item->ActivityName }}</td>
                            <td>{{ $item->ActivityMode }}</td>
                            <td>{{ $item->ActivityDate }}</td>
                            <!-- Action Buttons -->
                            <td class="text-center">
                                <!-- View Activity Button -->
                                <a href="{{ url('/ManageKafaActivity/teachers/' . $item->id) }}" title="View Activity">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                </a>
                                <!-- Book Activity Button -->
                                <a href="{{ url('/ManageKafaActivity/parents/' . $item->id . '/book') }}" title="Book">
                                    <button class="btn btn-success btn-sm"><i class="fa fa-book" aria-hidden="true"></i> Book</button>
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
