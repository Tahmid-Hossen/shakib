@extends('welcome')
@section('content')
 <div class="container">
  <div class="admin-section">
   <h1 class="text-center">Get In Touch</h1>
   </div>
   @if(Session::has('success'))
      <div class="row">
        <div class="col-lg-6 col-lg-offsegt-3">
          <ul>
            <li class="alert alert-success">{{ Session::get('success') }}</li>
          </ul>
        </div>
      </div>
   @endif
   
   @if(count($errors)>0)
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
        <ul>
            @foreach($error->all() as $error)
            <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
        </div>
      </div>
    @endif  
    <div class="row">
      <div class="col-md-6 col-lg-offset-3">
        <form action="{{ url('/sendemail/send') }}" method="POST">
          @csrf
          <div class="form-group">
           <label for="subject">Enter Your Subject</label>
           <input required type="text" name="subject" class="form-control input-lg" placeholder="Enter Your Subject">
          </div>

          <div class="form-group">
           <label for="email">Enter Your email</label>
           <input required type="text" name="email" class="form-control input-lg" placeholder="Enter Your Email">
          </div>

          <div class="form-group">
           <label for="email">Enter Your email</label>
           <textarea required name="message" class="form-control input-lg" rows="10"></textarea>
          </div>

          <div class="form-group">
           <input type="submit" name="send" value="send" class="btn btn-info">
          </div>
        </form>
      </div>
    </div>
 </div>
@endsection