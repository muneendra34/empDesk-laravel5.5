@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
  <div class="panel-body">Employee Information</div>
</div>
 <div class="col-md-6 col-lg-6">
<!-- Media top -->
<div class="media">
  <div class="media-left media-top">
    <img src="https://en.opensuse.org/images/0/0b/Icon-user.png" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h2 class="media-heading">{{$emp->emp_name}}</h2>
    <p>Department : {{$emp->dept}}</p>
     <p>Emp Id : {{$emp->id}}</p>
     <p>Age : {{$emp->age}}</p>
      <p>E-mail : {{$emp->email}}</p>
       <p>Mobile No : {{$emp->mobile}}</p>
        <p>City : {{$emp->city}}</p>
  </div>
</div>
</div>
@endsection