@extends('layout')
@section('content')

<div class="card shadow-lg mt-4">
    <div class="card-header" style="background-color: #bff6c3; color: black;">
        <h2 class="text-center">KAFA Activity</h2>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <form class="form-inline w-100" method="get" action="/search1">
                <div class="input-group w-100">
                    <input class="form-control" name="search" type="search" placeholder="Search Activity" value="{{ isset($search) ? $search : '' }}" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
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
                    @foreach($teachers as $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->ActivityName }}</td>
                            <td>{{ $item->ActivityMode }}</td>
                            <td>{{ $item->ActivityDate }}</td>
                            <td class="text-center">
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
