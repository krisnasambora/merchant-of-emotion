@extends('layouts.sunset-master')

@section('head-data')
	{{ HTML::style('css/sunset/sunset.css'); }}
	{{ HTML::script('js/sunset/sunset.js'); }}
@stop

@section('tab-title')
	<title>The Beginning of Sunset Deity</title>
@stop

@section('content')
	<video autoplay loop muted id="bgvid">
		<source src="../../public/videos/montagebw03.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<div class="col-md-4 col-md-offset-4 centered" id="announcement">
		<p class="text-center"><strong>MERCHANTOFEMOTION.COM IS UNDER CONSTRUCTION</strong></p>
	</div>
@stop

