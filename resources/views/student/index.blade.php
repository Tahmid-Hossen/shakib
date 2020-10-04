@extends('welcome')
@section('content')

<div class="container">
  <p>
  <a href="{{ Route('add.student') }}" class="btn btn-success mt-5">Add Student</a>
  </p>
  <hr>
  <table class="table table-responsive"> 
  <tr>
    <th>SL</th>
    <th>Image</th>
    <th>Student Name</th>
    <th>Student ID</th>
    <th>Semester</th>
    <th>Batch</th>
    <th>Department</th>
    <th>Student Email</th>
    <th>Student Phone</th>
    <th>Action</th>
  </tr>
  @foreach($student as $row)
  <tr>
  <td>{{ $row->id }}</td>
  <td><img src="{{ URL::to($row->image) }}" alt="" style="height:40px; width: 40px;"></td>
    <td>{{ $row->name }}</td>
    <td>{{ $row->student_id }}</td>
    <td>{{ $row->semester }}</td>
    <td>{{ $row->batch }}</td>
    <td>{{ $row->department }}</td>
    <td>{{ $row->email }}</td>
    <td>{{ $row->mobile }}</td>
    <td>
    <a href=" {{ URL::to('edit/student/' .$row->id) }} " class="btn btn-sm btn-info">Edit</a>
    <a href=" {{ URL::to('delete/student/' .$row->id) }} " class="btn btn-sm btn-danger delete">Delete</a>
    <a href="{{ URL::to('view/student/' .$row->id) }}" class="btn btn-sm btn-success">view</a>
    </td>
  </tr>
    @endforeach
  </table>
</div>



@endsection