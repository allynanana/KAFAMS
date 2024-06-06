@extends('layout')
@section('content')

<style>
    .toggle-activity {
        cursor: pointer;
        margin: 0 5px;
    }
</style>

<div class="card">
<div class="card-header" style="background-color: #bff6c3; color: black;">

        <h2>KAFA Activity</h2>
    </div>
    
    <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ url('/ManageKafaActivity/admins/create') }}" class="btn btn-success btn-sm" title="Add New Activity">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New Activity
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
                    @foreach($admins as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ActivityName }}</td>
                            <td>{{ $item->ActivityMode }}</td>
                            <td>{{ $item->ActivityDate }}</td>
                            <td>
                                <a href="{{ url('/ManageKafaActivity/admins/' . $item->id) }}" title="View Activity">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                </a>
                                <a href="{{ url('/ManageKafaActivity/admins/' . $item->id . '/edit') }}" title="Edit Activity">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                </a>
                                <form method="POST" action="{{ url('/ManageKafaActivity/admins' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Activity" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                                 <!-- Hide/Unhide Activity Button -->
                                 <form action="{{ route('activity.toggle', $item->id) }}" method="POST" style="display:inline-block;" class="toggle-form">
                                      @csrf
                                         @method('PUT')
                                    <button type="submit" class="btn btn-secondary btn-sm toggle-activity" title="{{ $item->hidden ? 'Unhide Activity' : 'Hide Activity' }}">
                                      <i class="fa {{ $item->hidden ? 'fa-eye' : 'fa-eye-slash' }}" aria-hidden="true"></i> {{ $item->hidden ? 'Unhide' : 'Hide' }}
                                    </button>
                                 </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.toggle-form').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const button = this.querySelector('.toggle-activity');
            const row = this.closest('tr');
            const url = this.action;

            fetch(url, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Toggle row visibility
                    row.style.display = row.style.display === 'none' ? '' : 'none';

                    // Update button text and icon
                    const isHidden = row.style.display === 'none';
                    button.innerHTML = isHidden ? 
                        '<i class="fa fa-eye" aria-hidden="true"></i> Unhide' : 
                        '<i class="fa fa-eye-slash" aria-hidden="true"></i> Hide';
                    button.title = isHidden ? 'Unhide Activity' : 'Hide Activity';
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});

</script>

@endsection