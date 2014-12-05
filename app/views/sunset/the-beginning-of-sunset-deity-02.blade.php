@extends('layouts.sunset.the-beginning-of-sunset-deity')

@section('head-data')
	{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-02.css'); }}
	<link rel="shortcut icon" href="{{ asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Her warm hands pulled me up, her bright feature opened the world for us to play with.">

@stop

@section('tab-title')
	<title>The Beginning of Sunset Deity: 01</title>
@stop

@section('content')
	<div class="horizon scroll">
		<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/titik-titik.jpg')}}">
	</div>
	<div class="middle scroll">
	</div>
	<div class="front scroll">
		<div class="element_a page">
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-02/animasi-a.gif')}}">
		</div>
		<div class="element_b page">
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-02/animasi-b.gif')}}">
		</div>
	</div>
@stop

