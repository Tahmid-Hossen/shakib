@extends('welcome')
@section('content')
<div class="admin-section">
  <h1>This is view student page</h1>
</div>



<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<img src="{{ URL::to($student->image) }}" alt="" style="height:340px;">
   <h5>Student Name: {{ $student->name }} </h5>
   <p>Student ID: {{ $student->student_id }}</p>
   <p>Semester: {{ $student->semester }}</p>
   <p>Batch: {{ $student->batch }}</p>
   <p>Department: {{ $student->department }}</p>
   <p>Email: {{ $student->email }}</p>
   <p>Phone: {{ $student->mobile }}</p>
</div>
<div class="col-sm-4"></div>
</div>


@endsection