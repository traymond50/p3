@extends('_master')

@section('title')
	P3 - Lorem-Ipsum
@stop

@section('content')
	<nav class="navbar navbar-inverse" role="navigation">
		<h1>Developer's Best Friend - Lorem Ipsum</h1>
	</nav>
	<a href="/">Home</a>
	<div class="row">
		<div class="col-xs-1"></div>
		<div class="col-xs-9">
			<h2>Lorem Ipsum Generator</h2>
			<p>How many paragraphs do you want?</p>
			{{Form::open(array('url' => 'lorem-ipsum')) }}
				{{Form::label('paragraphs','Paragraphs') }}
				{{Form::text('paragraphs') }}
				{{Form::label('paragraphs','Max: 99') }}
				<br>
				<br>
				{{Form::submit('Generate!') }}
			{{ Form::close()}}
		</div>
		<div class="col-xs-2"></div>
	</div>


@stop