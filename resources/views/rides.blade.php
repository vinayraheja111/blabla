<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Rides</title>
	<style>
		.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.card
{
	padding: 15px;
	width: 33% !important;
}

	</style>
</head>
<body>
  
 @if(session('success'))
 <div class="alert alert-success mt-2">
     {{session('success')}}
   </div>
 @endif                      

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bla Bla</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
    </ul>
        <button class="btn btn-danger navbar-btn">Book Ride</button>
         <a href="{{url('post')}}"><button class="btn btn-danger navbar-btn">Post Ride</button></a>
  </div>
</nav>

<div class="container">
	<div class="row">
		@foreach($arr as $list)
		<div class="card" style="width: 20rem;">
  <img class="card-img-top text-danger" src="{{asset('no.jpg')}}" alt="Card image cap" width="100%">
  <div class="card-block">
    <h4 class="card-title">{{$list->orgin}} to {{$list->destination}} </h4>
    <p class="card-text"><h6>Pickup Date:{{$list->dates}}</h6></p>
    <p class="card-text"><h6>Pickup Tiime:{{$list->time}}</h6></p>
    <p class="card-text"><h6>drop Tiime:{{$list->droptime}}</h6></p>
    <p class="card-text"><h6>seats Available:{{$list->seats}}</h6></p>
    <p class="card-text"><h6>Already Booking seats:0</h6></p>
    <p class="card-text"><h6>Price:{{$list->price}}</h6></p>
    @if(session('msg'))
    <div class="alert alert-danger">{{session('msg')}}
      @else
    <a href="{{route('book_dash',$list->id)}}" class="btn btn-primary">Book Ride</a>
    @endif
  </div>
  </div>
  @endforeach
	</div>
</div>



</body>
</html>