@extends('welcome')
@section('content')

<div class="container">
<div class="admin-section">
  <h1>Edit Teacher</h1>
</div>
<div class="content-section">
  <p>
  <a href="{{ Route('all.student') }}" class="btn btn-success mt-5">All Teacher</a>
  </p>
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <form action="{{ url('update/teacher/'.$teacher->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="file">Upload file</label>
              <input type="file" class="form-control-file" name="image"><br>
              Old Image: <img src="{{ URL::to($teacher->image) }}" style="height: 40px; width: 80px;">
              <input type="hidden" name="old_photo" value="{{ $teacher->image }}">
            </div>

            <div class="form-group">
              <label for="name">Enter your full name</label>
              <input required type="text" name="name" class="form-control" value="{{ $teacher->name }}">
            </div>

            <div class="form-group">
              <label for="department">Department</label>
              <select class="form-control" name="department" id="exampleFormControlSelect1">
              <option value="{{ $teacher->department }}">CSE</option>
              <option value="{{ $teacher->department }}">FDT</option>
              <option value="{{ $teacher->department }}">AMMT</option>
            </select>
          </div>
          <div class="form-group">
              <label for="email">Enter your email</label>
              <input required type="email" name="email" class="form-control" value="{{ $teacher->email }}">
            </div>
          <div class="form-group">
              <label for="mobile">Student Mobile</label>
              <input required type="phone" name="mobile" class="form-control" value="{{ $teacher->mobile }}">
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">Update</button>
        </form>
      </div>
    </div>
</div>
</div>

@endsection