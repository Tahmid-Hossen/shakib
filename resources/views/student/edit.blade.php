@extends('welcome')
@section('content')

<div class="container">
<div class="admin-section">
  <h1>Edit Student</h1>
</div>
<div class="content-section">
  <p>
  <a href="{{ Route('all.student') }}" class="btn btn-success mt-5">All Student</a>
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
          <form action="{{ url('update/student/'.$student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="file">Upload file</label>
              <input type="file" class="form-control-file" name="image"><br>
              Old Image: <img src="{{ URL::to($student->image) }}" style="height: 40px; width: 80px;">
              <input type="hidden" name="old_photo" value="{{ $student->image }}">
            </div>

            <div class="form-group">
              <label for="name">Enter your full name</label>
              <input required type="text" name="name" class="form-control" value="{{ $student->name }}">
            </div>

            <div class="form-group">
              <label for="id">Student ID</label>
              <input required type="text" name="student_id" class="form-control" value="{{ $student->student_id }}">
            </div> 
            <div class="form-group">
              <label for="semester">Semester</label>
              <select class="form-control" name="semester" id="exampleFormControlSelect1">
              <option value="{{ $student->semester }}">1st</option>
              <option value="{{ $student->semester }}">2nd</option>
              <option value="{{ $student->semester }}">3rd</option>
              <option value="{{ $student->semester }}">4th</option>
              <option value="{{ $student->semester }}">5th</option>
              <option value="{{ $student->semester }}">6th</option>
              <option value="{{ $student->semester }}">7th</option>
              <option value="{{ $student->semester }}">8th</option>
              <option value="{{ $student->semester }}">9th</option>
              <option value="{{ $student->semester }}">10th</option>
              <option value="{{ $student->semester }}">11th</option>
              <option value="{{ $student->semester }}">12th</option>
            </select>
          </div>

          <div class="form-group">
              <label for="batch">Student Batch</label>
              <input required type="text" name="batch" class="form-control" value="{{ $student->batch }}">
            </div> 

            <div class="form-group">
              <label for="department">Department</label>
              <select class="form-control" name="department" id="exampleFormControlSelect1">
              <option value="{{ $student->department }}">CSE</option>
              <option value="{{ $student->department }}">FDT</option>
              <option value="{{ $student->department }}">AMMT</option>
            </select>
          </div>
          <div class="form-group">
              <label for="email">Enter your email</label>
              <input required type="email" name="email" class="form-control" value="{{ $student->email }}">
            </div>
          <div class="form-group">
              <label for="mobile">Student Mobile</label>
              <input required type="phone" name="mobile" class="form-control" value="{{ $student->mobile }}">
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">Update</button>
        </form>
      </div>
    </div>
</div>
</div>

@endsection