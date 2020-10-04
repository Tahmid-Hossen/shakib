@extends('welcome')
@section('content')

<div class="container">
  <p>
  <a href="{{ Route('add.student') }}" class="btn btn-success mt-5">Add Teacher</a>
  </p>
  <hr>
  <table class="table table-responsive"> 
  <tr>
    <th>SL</th>
    <th>Image</th>
    <th>Teacher Name</th>
    <th>Department</th>
    <th>Teacher Email</th>
    <th>Teacher Phone</th>
    <th>Action</th>
  </tr>
  @foreach($teacher as $row)
  <tr>
  <td>{{ $row->id }}</td>
  <td><img src="{{ URL::to($row->image) }}" alt="" style="height:40px; width: 40px;"></td>
    <td>{{ $row->name }}</td>
    <td>{{ $row->department }}</td>
    <td>{{ $row->email }}</td>
    <td>{{ $row->mobile }}</td>
    <td>
    <a href=" {{ URL::to('edit/teacher/' .$row->id) }} " class="btn btn-sm btn-info">Edit</a>
    <a href=" {{ URL::to('delete/teacher/' .$row->id) }} " class="btn btn-sm btn-danger delete">Delete</a>
    <a href="{{ URL::to('view/teacher/' .$row->id) }}" class="btn btn-sm btn-success">view</a>
    </td>
  </tr>
    @endforeach
  </table>
</div>

@endsection