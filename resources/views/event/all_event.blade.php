@extends('welcome')
@section('content')
 <div class="container">
    <p>
    <a href="{{ Route('write.event') }}" class="btn btn-success mt-5">Create Events</a>
    </p>
    <hr>
    <table class="table table-responsive"> 
    <tr>
    <th>SL</th>
    <th>Category</th>
    <th>Title</th>
    <th>Image</th>
    <th>Action</th>
    </tr>
    @foreach($events as $row)
    <tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->name }}</td>
    <td>{{ $row->title }}</td>
    <td><img src="{{ URL::to($row->image) }}" alt="" style="height:40px; width: 40px;"></td>
    <td>
    <a href=" {{ URL::to('edit/post/' .$row->id) }} " class="btn btn-sm btn-info">Edit</a>
    <a href=" {{ URL::to('delete/event/' .$row->id) }} " class="btn btn-sm btn-danger delete">Delete</a>
    <a href="{{ URL::to('view/event/' .$row->id) }}" class="btn btn-sm btn-success">view</a>
    </td>
    </tr>
    @endforeach
    </table>
 </div>
@endsection