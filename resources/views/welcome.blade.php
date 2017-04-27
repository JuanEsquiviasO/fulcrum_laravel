@extends('layouts.app')

@section('content')
<div class="title m-b-md">
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
</div>
@endsection