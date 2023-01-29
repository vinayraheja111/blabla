<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book Ride</title>
	          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

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
		<form method="post" action="{{route('bookride')}}">
			@csrf
	<div class="card" style="width: 20rem;">
  <img class="card-img-top text-danger" src="{{asset('no.jpg')}}" alt="Card image cap" width="100%">
  <div class="card-block">
    <h4 class="card-title"><input type="text" name="origin" value="{{$list->orgin}}" readonly></h4>
    <h4 class="card-title"><input type="text" name="destination" value="{{$list->destination}}" readonly> </h4>
    <h4 class="card-title"><input type="text" name="id" value="{{$list->id}}" readonly> </h4>
    <p class="card-text"><h6>Pickup Date:<input type="date" value="{{$list->dates}}" name="date" readonly></h6></p>
    <p class="card-text"><h6>Pickup Time:<input type="time" value="{{$list->time}}" name="time" readonly></h6></p>
    <p class="card-text"><h6>Drop Date:<input type="date" value="{{$list->dates}}" name="dtime" readonly></h6></p>
   <p class="card-text">Total Available seats: <input type="number" min="1" max="4" value="{{$list->seats}}" name="seat"></p>
   <p class="card-text"><h6>Price<input type="number" value="{{$list->price}}" name="price" readonly></h6></p>
    <input type="submit" name="submit" class="btn btn-primary">
  </div>
  </div>
  </form>
  @endforeach

</div>
</div>
 

</body>
</html>