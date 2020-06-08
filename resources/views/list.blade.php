@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="">
	<a href="{{ url('create') }}">Insert Record</a>
</div>
<div class="col-md-12">
	<table>
		<thead>
			<tr>
				<th>Employee Name</th>
				<th>Dob</th>
				<th>Address</th>
				<th>Technologies</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($emprecord as $empkey=> $empVal)
			<tr>
				<td>{{ $empVal->emp_name }}</td>
				<td>{{ $empVal->dob }}</td>
				<td>{{ $empVal->address }}</td>
				<td>{{ $empVal->tech }}</td>
				<td>
					<a href="edit-record/{{ $empVal->id }}">Edit</a>
					<a href="delete-record/{{ $empVal->id }}">Delete</a></td>	
			</tr>
			@endforeach
		</tbody>
	</table>
</div>