
<form action="{{url('update-record/'.$emprecord->id)}}" method="POST">
	@csrf
	@method('PUT')

	<div class="col-md-12">
		<label class="col-md-3">Emp Name</label>
		<input class="col-md-6" type="text" name="emp_name" id="emp_name" placeholder="Employee Name" value="{{$emprecord->emp_name}}">
		@if($errors->has('emp_name'))
		    <div class="error">{{ $errors->first('emp_name') }}</div>
		@endif
	</div>
	<div class="col-md-12">
		<label class="col-md-3">Dob</label>
		<input  class="col-md-6" type="date" name="dob" id="dob" placeholder="Dob" value="{{$emprecord->dob}}">
		@if($errors->has('dob'))
		    <div class="error">{{ $errors->first('dob') }}</div>
		@endif
	</div>
	<div class="col-md-12">
		<label class="col-md-3">Address</label>
		<input class="col-md-6" type="text" name="address" id="address"  placeholder="Address"  value="{{$emprecord->address}}">
		@if($errors->has('address'))
		    <div class="error">{{ $errors->first('address') }}</div>
		@endif
	</div>
	<div class="col-md-12">
		<label class="col-md-3">Technologies</label>
		<select class="col-md-6" name="tech">
			<option value="php">PHP</option>
			<option value="dotnet">.Net</option>
			<option value="nodejs">Node Js</option>
			<option value="java">Java</option>
		</select>
	</div>

	<input class="col-md-3" type="submit" value="update">
</form>