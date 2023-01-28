<!DOCTYPE html>
<html>
<head>
	<title>Post Ride</title>
</head>
<body>
       <form method="" action="">
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
       				<option value="{{$list->id}}">{{$list->city}}</option>
       				@endforeach
       			</select>
       		</td>
       		</tr>
       		<tr>
       			<td>Destination</td>
       			<td>
       				<select value="" name="destinantion" required="">
       					<option value="hidden">choose Destinantion</option>
       					@foreach($arr as $list)
       				<option value="{{$list->id}}">{{$list->city}}</option>
       				@endforeach
       			</select>
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
            	<td>Ride Schedule</td>
            	<td><input type="radio" name="one_time" value="One Time">One Time
                    <input type="radio" name="one_time" value="One Time">Recurring Trip
            	</td>
            </tr>
            <tr>
            	<td>vehicle Details</td>
            	<td>
            		<select name="vehicle-brand" value="" required="">
            			<option value="hidden">Brand</option>
            			@foreach($cdata as $list)
            		<option value="{{$list->id}}">{{$list->brand}}</option>
            		@endforeach
            	</select>
            	<select name="vehicle-model" value="" required="">
            		<option value="hidden">Model</option>
            	</select>
            	<select name="vehicle-color" value="" required="">
            		<option value="hidden">Color</option>
            		@foreach($cdata as $list)
            		<option value="{{$list->id}}">{{$list->color}}</option>
            		@endforeach
            	</select>
            	<input type="number" min='1908' max="2024" name="year" placeholder="YYYY">
            	<input type="text"  name="licenese number" placeholder="License Number">
            	<input type="file" name="file">
            </tr>
            <tr>
            	<td>Luggagae</td>
            	<td>
            		<input type="radio" name="luggage" value="">No Luggage
            		<input type="radio" name="luggage" value="">Medium
            		<input type="radio" name="luggage" value="">Large
            		<input type="radio" name="luggage" value="">Small
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
            		<input type="checkbox" name="winter_tires" value="">winter_tires
                    <input type="checkbox" name="bikes" value="">Bikes
                    <input type="checkbox" name="pets" value="">Pets
                    <input type="checkbox" name="skin and snowbords" value="">Skins And Snowbords
            	</td>
            </tr>
            	<td>
            		Empty seats
            	</td>
            	<td>
            		<select value="" min="1" max="8" type="number">
            			<option value="hidden">Choose Seats</option>
            			<option value="">1</option>
            			<option value="">2</option>
            			<option value="">3</option>
            			<option value="">4</option>
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