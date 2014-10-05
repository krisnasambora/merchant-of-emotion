@extends('layouts.homesite')

@section('head-data')
	{{ HTML::style('css/homesite/home.css'); }}
	{{ HTML::script('js/homesite/home.js'); }}
@stop

@section('tab-title')
	<title>Welcome</title>
@stop

@section('content')
	<h1 class="text-center">home content</h1>
	<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
        <div><img u="image" src="images/1.jpg" /></div>
        <div><img u="image" src="images/2.jpg" /></div>
    </div>
</div>
@stop

