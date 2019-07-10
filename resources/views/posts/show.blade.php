@extends('layouts.app')

@section('content')
	<h1>{{$post->title}}</h1>
	<br>
	<div>
		{{$post->body}}
	<div>
	<hr>
	<small>written on {{$post->created_at}} </small><small class="ml-2"><span style="color:blue;">by {{$post->user['name']}}</span></small>
	<hr>

	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

			{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			{!!Form::close()!!}
		@endif
	@endif

@endsection