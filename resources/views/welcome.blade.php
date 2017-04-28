@extends('layouts.app')

@section('content')
{{-- <div class="title m-b-md">
		Fulcrum,  by <a href="https://laravel.com">Laravel</a> 
</div>

@if (isset($origin))
<p>Manufacturer: {{ $origin }}</p>
@else
<p>Manufacturer unknow</p>
@endif

<div class="links">
		@foreach ($links as $link => $text)
			<a href="{{ $link }}">{{ $text }}</a>
		@endforeach
</div> --}}
<div class="jumbotron text-center">
	<h1>Fulcrum,  by <a href="https://laravel.com">Laravel</h1>
	<nav>
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link" href="/">Home</a>
			</li>
		</ul>
	</nav>
</div>
<div class="row">
	@forelse($messages as $message)
		<div class="col-6">
			<img class="img-thumbnail" src="{{$message ['image'] }}">
			<p class="card-text">
				{{ $message['content'] }}
				<a href="/messages/{{  $message['id'] }}">| Read more...</a>
			</p>
		</div>
	@empty
		<p>Don´t have messages</p>
	@endforelse
</div>
@endsection