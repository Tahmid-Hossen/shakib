@extends('welcome')
@section('content')

<div class="container">
<div class="admin-section">
  <h1>Add Teacher</h1>
</div>
<div class="content-section">
  <p>
  <a href="{{ Route('all.teacher') }}" class="btn btn-success mt-5">All Teacher</a>
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
          <form action="{{ route('store.teacher') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="file">Upload file</label>
              <input type="file" class="form-control-file" name="image">
            </div>

            <div class="form-group">
              <label for="name">Enter your full name</label>
              <input required type="text" name="name" class="form-control" placeholder="Enter your full name">
            </div>

            <div class="form-group">
              <label for="department">Department</label>
              <select class="form-control" name="department" id="exampleFormControlSelect1">
              <option>CSE</option>
              <option>FDT</option>
              <option>AMMT</option>
            </select>
          </div>
          <div class="form-group">
              <label for="email">Enter your email</label>
              <input required type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>
          <div class="form-group">
              <label for="mobile">Teacher Mobile</label>
              <input required type="phone" name="mobile" class="form-control" placeholder="Enter your mobile no:">
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block mb-2">Submit</button>
        </form>
      </div>
    </div>
</div>
</div>

@endsection