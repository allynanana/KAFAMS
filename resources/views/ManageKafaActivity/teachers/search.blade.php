@extends('layout')
@section('content')
  
 
                <div class="card">
                    <div class="card-header">
                        <h2>KAFA Activity</h2>
                    </div>
                    <div class="card-body">
                    
                    <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
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
                                            <a href="{{ url('/ManageKafaActivity/teachers/' . $item->id) }}" title="View Activity"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/ManageKafaActivity/teachers/' . $item->id . '/edit') }}" title="Edit Activity"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>

                
    
@endsection