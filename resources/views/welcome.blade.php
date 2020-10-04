<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel project</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand logo" href="#">SMUCSE</a>
      
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        <li class="menu-li"><a class="mx-2 menu-name" href="{{ url('/') }}">Home</a></li>
        <li class="menu-li"><a class="mx-2 menu-name" href="">Announcement</a></li>
        <li class="menu-li"><a class="mx-2 menu-name" href="{{ Route('Show.event') }}">Upcoming Events</a></li>
        <li class="menu-li"><a class="mx-2 menu-name" href="">Blog</a></li>
        <li class="menu-li"><a class="mx-2 menu-name" href="">Galary</a></li>
        <li class="menu-li"><a class="mx-2 menu-name" href="{{ Route('contact.page') }}">Contact</a></li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
      <div class="admin mx-2">
        <a href=" {{ Route('admin.page') }} " class="btn btn-danger">Admin</a>
       </div>
  </nav>
</div>
  @yield('content')

  <div class="container">
      <div class="footer d-flex justify-content-center d-flex align-items-center">
        <h6>@shakib-ecommerce, All rights reserve Webamex</h6>
      </div>
    </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
