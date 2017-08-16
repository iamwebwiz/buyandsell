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
					<td></td>
					<td>Title</td>
					<td>Location</td>
					<td>Phone</td>
					<td>Action</td>
				</thead>
				<tbody>
					<td></td>
					<td>Flight booking ticket</td>
					<td>Magboro, Lagos</td>
					<td>08163947019</td>
					<td><a href="#" class="btn btn-danger">Delete</a></td>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection