@extends('layout')
@section('content')

<div class="card shadow-lg">
    <div class="card-header" style="background-color: #bff6c3; color: black;">
        <h2 class="text-center">KAFA Activity</h2>
    </div>

    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <a href="{{ route('parents.viewBooking') }}" class="btn btn-info btn-sm mr-2" title="My Booking">
                    <i class="fa fa-calendar-check" aria-hidden="true"></i> My Booking
                </a>
                <a href="{{ url('/ManageKafaActivity/parents/create') }}" class="btn btn-success btn-sm" title="Add New Activity">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add Student Details
                </a>
            </div>
            <form class="form-inline" type="get" action="/search">
                <div class="input-group">
                    <input class="form-control" name="search" type="search" placeholder="Activity Name" value="{{ isset($search) ? $search : '' }}" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>#</th>
                        <th>Activity Name</th>
                        <th>Class Mode</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kafaactivities as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->ActivityName }}</td>
                            <td>{{ $item->ActivityMode }}</td>
                            <td>{{ $item->ActivityDate }}</td>
                            <td class="text-center">
                                <a href="{{ url('/ManageKafaActivity/teachers/' . $item->id) }}" title="View Activity">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                </a>
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
