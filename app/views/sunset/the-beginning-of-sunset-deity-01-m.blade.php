@extends('layouts.sunset.the-beginning-of-sunset-deity')

@section('head-data')
	{{ HTML::script('js/scale.js'); }}
	{{ HTML::script('js/sunset/the-beginning-of-sunset-deity-01-m.js'); }}
	{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-01-m.css'); }}
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
	<div id="main_bg" class="scroll">
		<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/chapter1.jpg')}}">
	</div>
	<div id="l01" class="scroll">
		<div id="next" class="page">
			<a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/02-m-a"><img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/next.png')}}"></a>
		</div>
	</div>
@stop


