@extends('layout')
@section('content')

<div class="card">
<div class="card-header" style="background-color: #bff6c3; color: black;">
        <h2>KAFA Activity</h2>
    </div>
    
    <div class="card-body">
        
        <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('parents.viewBooking') }}" class="btn btn-info btn-sm" title="My Booking">
                <i class="fa fa-calendar-check" aria-hidden="true"></i> My Booking
            </a>
            
            <form class="form-inline" type="get" action="/search">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Activity Name" value="{{ isset($search) ? $search : '' }}" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

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
                    @foreach($kafaactivities as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ActivityName }}</td>
                            <td>{{ $item->ActivityMode }}</td>
                            <td>{{ $item->ActivityDate }}</td>
                            <td>
                                <a href="{{ url('/ManageKafaActivity/teachers/' . $item->id) }}" title="View Activity">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                </a>
                                <a href="{{ url('/ManageKafaActivity/parents/' . $item->id . '/book') }}" title="Book">
                                    <button class="btn btn-success btn-sm"><i class="fa fa-book" aria-hidden="true"></i> Book</button>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
