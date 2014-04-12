@extends('layouts.default')

@section('content')
	<h1>Author's Home Page</h1>

	<ul>
	@foreach($authors as $author)
		<li>{{ $author->name }}</li>
	@endforeach
	</ul>
@endsection
@stop