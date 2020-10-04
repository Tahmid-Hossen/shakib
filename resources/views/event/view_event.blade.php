@extends('welcome')
@section('content')
 <div class="container">
 <div class="admin-section">
  <h1>Event page</h1>
</div>


<div>

   <h3 style="text-align: center; color: #00bfff;" class="pb-5 mt-5">{{ $events->title }}</h3>
   <img src="{{ URL::to($events->image) }}" alt="" style="height:500px; width: 600px;" class="pb-2 pt-3">
   <p>{{ $events->details}}</p>

</div>
 </div>
@endsection