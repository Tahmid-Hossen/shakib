@extends('welcome')
@section('content')

  <div class="container">
  <div class="admin-section">
  <h1>Event page</h1>
 </div>
    <br>
    <div class="row">
    @foreach($events as $row)
    <div class="col-sm-4 ">
      <div class="post-preview">
      <a href="{{ URL::to('view/event/' .$row->id) }}">
        <h5 class="post-title" style="font-size: 20px; text-align: center;"> {{ $row->title }} </h5>
        <img src="{{URL::to($row->image)}}" style="height:300px; width:350px;" alt="">
        </a>
        <p class="post-meta">category
        <a href="#">{{ $row->name }}</a>
        on slug {{ $row -> slug }}</p>
      </div>
    </div>
    @endforeach
    </div>

    {{ $events->links() }}

    <div class="clearfix">
      <a href="#" class="btn btn-primary float-right">Older Posts &rarr;</a>
    </div>
  </div>

@endsection