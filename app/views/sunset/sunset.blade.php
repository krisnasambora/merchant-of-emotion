@extends('layouts.sunset-master')

@section('head-data')
	{{ HTML::style('css/sunset/sunset.css'); }}
	{{ HTML::script('js/sunset/sunset.js'); }}
@stop

@section('tab-title')
	<title>The Beginning of Sunset Deity</title>
@stop

@section('content')
	<video autoplay loop id="bgvid">
		<source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<div class="col-md-4 col-md-offset-4">
		<button id="vidpause" class="btn btn-info btn-lg btn-block">Pause</button>
	</div>
@stop

