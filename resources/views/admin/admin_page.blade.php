@extends('welcome')
@section('content')
  <div class="container">
    <div class="admin-section">
      <h1>This is admin panel</h1>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    <table class="table table-dark mt-5">
    <thead>
      <tr>
        <th scope="col"><h4>Admin Panel List</h4></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><h5><a href="" style="color: #00ffff; text-decoration: none; ">Add Alumni<img src="https://img.icons8.com/color/48/000000/student-male--v1.png"/></a></h5></th>
      </tr>
      <tr>
      <th scope="row"><h5><a href="{{ Route('add.teacher') }}" style="color: #00ffff; text-decoration: none;">Add Teacher <img src="https://img.icons8.com/color/48/000000/teacher.png"/></a></h5></th>
      </tr>
      <tr>
      <th scope="row"><h5><a href="{{ Route('add.student') }}" style="color: #00ffff; text-decoration: none;">Add Student </a></h5></th>
      </tr>
      <tr>
      <th scope="row"><h5><a href="" style="color: #00ffff; text-decoration: none;">Add Blog </a></h5></th>
      </tr>

      <tr>
      <th scope="row"><h5><a href="{{ Route('write.event') }}" style="color: #00ffff; text-decoration: none;">Add Event </a></h5></th>
      </tr>

      <tr>
      <th scope="row"><h5><a href="" style="color: #00ffff; text-decoration: none;">Add Announcements </a></h5></th>
      </tr>
      </tbody>
    </table>
    </div>
    <div class="col-sm-8"></div>
  </div>
</div>


@endsection