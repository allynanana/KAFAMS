@extends('layout')
@section('content')

<div class="card">
<div class="card-header" style="background-color: #bff6c3; color: black;">
        <h2>KAFA Activity</h2>
    </div>
    <div class="card-body">
    <form class="form-inline my-2 my-lg-0" method="get" action="/search1">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search Activity" value="{{ isset($search) ? $search : '' }}" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

        <br>
        <br>
        <div class="table-responsive">
            <table class="table table-striped">
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
                    @foreach($teachers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->ActivityName }}</td>
                        <td>{{ $item->ActivityMode }}</td>
                        <td>{{ $item->ActivityDate }}</td>
                        <td>
                            <a href="{{ url('/ManageKafaActivity/teachers/' . $item->id) }}" title="View Activity">
                                <button class="btn btn-info btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </button>
                            </a>
                            <a href="{{ url('/ManageKafaActivity/teachers/' . $item->id . '/edit') }}" title="Edit Activity">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </button>
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
