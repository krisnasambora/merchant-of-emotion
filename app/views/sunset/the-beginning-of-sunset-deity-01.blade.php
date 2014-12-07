@extends('layouts.sunset.the-beginning-of-sunset-deity')

@section('head-data')
	{{ HTML::script('js/sunset/the-beginning-of-sunset-deity-01.js'); }}
	{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-01.css'); }}
	<link rel="shortcut icon" href="{{ asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="At first, I was a boy. Stranded as the first thing The Creator created, long before the living world that we know today. Even before time.">

@stop

@section('tab-title')
	<title>The Beginning of Sunset Deity: 01</title>
@stop

@section('content')
	<div id="loader">
	    <img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/loading.gif')}}" width="40%">
	</div> 
	<div class="horizon scroll">
		<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/titik-titik.jpg')}}">
	</div>
	<div class="middle scroll" id = "lights">
		<div class="element02 page">   
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/cahaya.png')}}">
		</div>
		<div class="element03 page">
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png')}}">
		</div>
	</div>
	<div class="front scroll">
		<div class="element01 page" id = "element-01">
			<img alt="" src="">
		</div>
		<div class="element04 page">
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/2.png')}}">
		</div>
		<div class="element05 page">
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/3.gif')}}">
		</div>
		<div class="element06 page">
			<a href="http://localhost/merchant-of-emotion/public/index.php/the-beginning-of-sunset-deity/announcement"><img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/next.png')}}"></a>
		</div>
	</div>
@stop


