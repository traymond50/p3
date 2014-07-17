@extends('_master')

@section('title')
	P3
@stop

@section('content')
	<nav class="navbar navbar-inverse" role="navigation">
		<h1>Developer's Best Friend </h1>
	</nav>
	<div class="row">
		<div class="col-xs-1"></div>
		<div class="col-xs-9">
			<h2>Lorem Ipsum Generator</h2>
			<p> In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.</p>
			</br>
			<p>Create random filler text for your applications.</p>
			<a href="/lorem-ipsum">Generate some text...</a>
			<h2>Random User Generator</h2>
			<p>Create random user data for your applications. Like Lorem Ipsum, but for people</p>
			<a href="/random-user">Generate some users...</a>
		</div>
		<div class="col-xs-2"></div>
	</div>
@stop