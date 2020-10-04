@extends('welcome')
@section('content')
<div class="container">
<div class="admin-section">
  <h1>This is view teacher page</h1>
</div>
</div>



<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<img src="{{ URL::to($teacher->image) }}" alt="" style="height:340px;">
   <h5>Teacher Name: {{ $teacher->name }} </h5>
   <p>Department: {{ $teacher->department }}</p>
   <p>Email: {{ $teacher->email }}</p>
   <p>Phone: {{ $teacher->mobile }}</p>
</div>
<div class="col-sm-4"></div>
</div>

@endsection