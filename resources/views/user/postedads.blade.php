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
			{{ $user->firstname }}
		</div>
	</div>
</div>

@endsection