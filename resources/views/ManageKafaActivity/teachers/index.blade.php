@extends('layout')

@section('content')

<!-- Card Container with Shadow and Margin -->
<div class="card shadow-lg mt-4">
    <!-- Card Header with Custom Background and Text Color -->
    <div class="card-header" style="background-color: #bff6c3; color: black;">
        <h2 class="text-center">KAFA Activity</h2>
    </div>
    
    <!-- Card Body -->
    <div class="card-body">
        <!-- Search Form Container -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <!-- Search Form -->
            <form class="form-inline w-100" method="get" action="/search1">
                <!-- Input Group for Search Field and Button -->
                <div class="input-group w-100">
                    <!-- Search Input Field -->
                    <input class="form-control" name="search" type="search" placeholder="Search Activity" value="{{ isset($search) ? $search : '' }}" aria-label="Search">
                    <!-- Input Group Append for Search Button -->
                    <div class="input-group-append">
                        <!-- Search Button -->
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Table Container -->
        <div class="table-responsive">
            <!-- Activities Table -->
            <table class="table table-striped table-bordered">
                <!-- Table Header -->
                <thead class="thead-dark text-center">
                    <tr>
                        <!-- Column Headers -->
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
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <!-- Activity Name -->
                            <td>{{ $item->ActivityName }}</td>
                            <!-- Activity Mode (e.g., Online, Offline) -->
                            <td>{{ $item->ActivityMode }}</td>
                            <!-- Activity Date -->
                            <td>{{ $item->ActivityDate }}</td>
                            <!-- Action Buttons -->
                            <td class="text-center">
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
