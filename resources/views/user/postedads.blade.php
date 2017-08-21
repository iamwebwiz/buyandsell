@extends('templates.master')

@section('title')
Posted Ads
@endsection

@section('body')
@include('user.navbar')

<div class="container">
	<ol class="breadcrumb">
		<li><a href="{{ route('dashboard') }}">Home</a></li>
		<li class="active">Ads posted by you</li>
	</ol>
	<h1 class="thin">Posted Ads</h1>
	<hr>
	<div class="panel panel-default">
		<div class="panel-body">
			<h3 class="thin">Adverts posted by you</h3>
			<hr>
			@include('partials.messages')
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
						<th class="text-center">Title</th>
						<th class="text-center">Location</th>
						<th class="text-center">Phone</th>
						<th class="text-center">Action</th>
					</thead>
					<tbody>
						@foreach($adverts as $advert)
							<tr>
								<td class="text-center">{{ $advert->title }}</td>
								<td class="text-center">{{ $advert->location }}</td>
								<td class="text-center">{{ $advert->phone }}</td>
								<td class="text-center">
									<a href="{{ route('ad.edit', ['ad_id' => $advert->id]) }}" class="btn btn-info btn-xs">Edit</a>
									<a href="{{ route('ad.delete', ['ad_id' => $advert->id]) }}" id="deletePost" class="btn btn-danger btn-xs">Delete</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
