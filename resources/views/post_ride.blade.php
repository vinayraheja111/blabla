<!DOCTYPE html>
<html>
<head>
	<title>Post Ride</title>
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
       <a href="{{route('ride_dash')}}"> <button class="btn btn-danger navbar-btn">Book Ride</button></a>
         <a href="{{url('post')}}"><button class="btn btn-danger navbar-btn">Post Ride</button>
     </div>
 </nav></a>
       <form method="post" action="{{route('ride_insert')}}">
       	@csrf
       	<table align="center" bgcolor="lightgreen" border="1px solid black">
       		<tr>
       			<th colspan="2">
       				<h3>Post A Ride</h3>
       			</th>
       		</tr>
       		<tr>
       			<td>Origin</td>
       			<td><select value="" name="Origin" required="">
       				<option value="hidden">Choose Origin</option>
       				@foreach($arr as $list)
       				<option value="{{$list->city}}">{{$list->city}}</option>
       				@endforeach
       			</select>
                @error('origin'){{$message}}@enderror
       		</td>
       		</tr>
       		<tr>
       			<td>Destination</td>
       			<td>
       				<select value="" name="destinantion" required="">
       					<option value="hidden">choose Destinantion</option>
       					@foreach($arr as $list)
       				<option value="{{$list->city}}">{{$list->city}}</option>
       				@endforeach
       			</select>
                @error('destinantion'){{$message}}@enderror
       		</td>
       		</tr>
       			<tr>
       			<td>Stop</td>
       			<td><select value="" name="stop" >
       				<option></option>
       			</select>
       		</td>
       		</tr>
            <tr>
                <td>When are You going</td>
                <td>
                    <input type="date" name="date" value="">
                </td>
            </tr>
            <tr>
                <td>What time you will pick pessenger</td>
               <!-- {{ $time = date("H:i:s")}} -->
                <td><input type="time" name="time" value="">
            </td>
            </tr>
             <tr>
                <td>What time you will Drop pessenger</td>
               <!-- {{ $time = date("H:i:s")}} -->
                <td><input type="time" name="dtime" value="">
            </td>
            </tr>
            <tr>
            	<td>Ride Schedule</td>
            	<td><input type="radio" name="type" value="one Time">One Time
                    <input type="radio" name="type" value="Recurring Trip">Recurring Trip
            	</td>
            </tr>
            <tr>
            	<td>vehicle Details</td>
            	<td>
            		<select  value="" required="" name="brand">
            			<option value="hidden">Brand</option>
            			@foreach($cdata as $list)
            		<option value="{{$list->brand}}">{{$list->brand}}</option>
            		@endforeach
            	</select>
            	<select  value="" required="" name="model">
            		<option value="hidden">Model</option>
            	</select>
            	<select  value="" required="" name="color">
            		<option value="hidden">Color</option>
            		@foreach($cdata as $list)
            		<option value="{{$list->color}}">{{$list->color}}</option>
            		@endforeach
            	</select>
            	<input type="number" min='1908' max="2024" name="year" placeholder="YYYY">
            	<input type="text"  name="licenese_number" placeholder="License Number">
            	<input type="file" name="file">
            </tr>
            <tr>
            	<td>Luggagae</td>
            	<td>
            		<input type="radio" name="luggage" value="No Luggage">No Luggage
            		<input type="radio" name="luggage" value="Medium">Medium
            		<input type="radio" name="luggage" value="Large">Large
            		<input type="radio" name="luggage" value="Small">Small
            	</td>
            </tr>
            <tr>
            	<td>Back Row Sitting</td>
            	<td><input type="radio" name="people" value="">Max Two People
                    <input type="radio" name="people" value="">Max Three People
            	</td>
            </tr>
             <tr>
            	<td>Other</td>
            	<td>
            		<input type="checkbox" name="Other" value="winter_tires">winter_tires
                    <input type="checkbox" name="Other" value="Bikes">Bikes
                    <input type="checkbox" name="Other" value="Pets">Pets
                    <input type="checkbox" name="Other" value="Skins And Snowbords">Skins And Snowbords
            	</td>
            </tr>
            	<td>
            		Empty seats
            	</td>
            	<td>
            		<select value="" min="1" max="8" type="number" name="seat">
            			<option value="hidden">Choose Seats</option>
            			<option value="1">1</option>
            			<option value="2">2</option>
            			<option value="3">3</option>
            			<option value="4">4</option>
            		</select>
            	</td>
            	<tr>
            		<td>Price</td>
            		<td><input type="number" value="" name="price" required="" placeholder="price"></td>
            	</tr>
            </tr>
            <tr>
            	<td colspan="2" align="center">
            		<input type="submit" name="sub" value="submit">
            	</td>
            </tr>
            
       	</table>
       </form>

</body>
</html>