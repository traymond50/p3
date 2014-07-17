@extends('_master')

@section('title')
	P3 - Random-User
@stop

@section('content')
	<nav class="navbar navbar-inverse" role="navigation">
		<h1>Developer's Best Friend - Random User Generator</h1>
	</nav>
	<a href="/">Home</a>
	<div class="row">
		<div class="col-xs-1"></div>
		<div class="col-xs-9">
			<h2>Random User Generator</h2>
			{{Form::open(array('url' => 'random-user')) }}
				{{Form::label('users','Users:') }}
				{{Form::text('users') }}
				{{Form::label('paragraphs','Max: 99') }}
				<br>
				<p>Include...</p>
				{{Form::checkbox('birthdate','on') }}
				{{Form::label('birthdate','Birthdate') }}
				<br>
				{{Form::checkbox('profile','on') }}
				{{Form::label('profile','Profile') }}
				<br>
				{{Form::submit('Generate!') }}
			{{ Form::close()}}
		</div>
		<div class="col-xs-2"></div>
	</div>
@stop