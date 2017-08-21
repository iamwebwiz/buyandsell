@extends('templates.master')

@section('title')
Edit Advert
@endsection

@section('body')
@include('user.navbar')

<div class="container">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard') }}">Home</a></li>
			<li class="active">Edit Advert</li>
		</ol>
		<h1 class="thin">Edit Advert</h1>
		<hr>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<p class="alert alert-info">Edit your advert</p>
					@include('partials.messages')
					<form method="post" action="{{ route('editad', ['ad_id' => $advert->id]) }}" enctype="multipart/form-data">
						{{-- <div class="form-group">
							<label for="firstname">First name</label>
							<input type="text" name="ad_poster" placeholder="Your name" class="form-control" value="{{ $user->firstname }}" disabled required>
						</div> --}}
						<div class="form-group">
							<label for="title">Title <span class="text-danger">*</span></label>
							<input type="text" name="ad_title" placeholder="Title of Ad" class="form-control" required value="{{ $advert->title }}">
						</div>
						<div class="form-group">
							<label for="price">Price <span class="text-danger">*</span></label>
							<input type="number" name="ad_price" placeholder="Amount" class="form-control" required value="{{ $advert->price }}">
						</div>
						<div class="form-group">
							<label for="location">Location <span class="text-danger">*</span></label>
							<input type="text" name="ad_location" placeholder="Your location" class="form-control" value="{{ $advert->location }}">
						</div>
						<div class="form-group">
							<label for="phone">Phone <span class="text-danger">*</span></label>
							<input type="tel" name="ad_phone" placeholder="09088382819" class="form-control" value="{{ $advert->phone }}">
						</div>
						{{-- <div class="form-group">
							<label for="ad_image">Image <span class="text-danger">*</span></label>
							<input type="file" name="ad_image" class="form-control" multiple value="{{ $advert->image }}">
						</div> --}}
						<div class="form-group">
							<button class="btn btn-success submitbtn" type="submit">Edit Advert</button>
						</div>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
@endsection