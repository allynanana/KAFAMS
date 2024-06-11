@extends('layout')
@section('content')
  
<!-- Main Card Container -->
<div class="card">
    <!-- Card Header with Title -->
    <div class="card-header">
        <h2>KAFA Activity</h2>
    </div>

    <!-- Card Body -->
    <div class="card-body">
        <br/>
        <br/>

        <!-- Table Container with Responsive Styling -->
        <div class="table-responsive">
            <!-- Table Element -->
            <table class="table">
                <!-- Table Header -->
                <thead>
                    <tr>
                        <!-- Table Column Headers -->
                        <th>#</th>
                        <th>Activity Name</th>
                        <th>Class Mode</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                    <!-- Loop Through Each Teacher's Activity -->
                    @foreach($teachers as $item)
                        <tr>
                            <!-- Iteration Number -->
                            <td>{{ $loop->iteration }}</td>
                            <!-- Activity Name -->
                            <td>{{ $item->ActivityName }}</td>
                            <!-- Activity Mode -->
                            <td>{{ $item->ActivityMode }}</td>
                            <!-- Activity Date -->
                            <td>{{ $item->ActivityDate }}</td>
                            <!-- Action Buttons -->
                            <td>
                                <!-- View Activity Button -->
                                <a href="{{ url('/ManageKafaActivity/teachers/' . $item->id) }}" title="View Activity">
                                    <button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <!-- Edit Activity Button -->
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
