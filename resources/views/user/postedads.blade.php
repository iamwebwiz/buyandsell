@extends('templates.master')

@section('title')
Posted Ads
@endsection

@section('body')
@include('user.navbar')

<div class="container">
	<h1 class="thin">Posted Ads</h1>
	<hr>
	<div class="panel panel-default">
		<div class="panel-body">
			<h3 class="thin">Adverts posted by you</h3>
			<hr>
			<table class="table table-hover">
				<thead>
					<th></th>
					<th>Title</th>
					<th>Location</th>
					<th>Phone</th>
					<th>Action</th>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td>Flight booking script</td>
						<td>Magboro, Lagos</td>
						<td>08163947019</td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
					</tr>
					<tr>
						<td></td>
						<td>Wedding booking script</td>
						<td>Magboro, Lagos</td>
						<td>08163947019</td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection