@extends('layouts.homesite')

@section('head-data')
	{{ HTML::style('css/homesite/home.css'); }}
	{{ HTML::script('js/homesite/home.js'); }}
@stop

@section('tab-title')
	<title>Welcome</title>
@stop

@section('content')
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center">home content</h1>
		<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
		    <!-- Slides Container -->
		    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 350px; height: 300px;">
		        <div><img u="image" src="images/3.jpg" class="img-responsive" alt="Responsive image" ></div>
		        <div><img u="image" src="images/4.jpg" class="img-responsive" alt="Responsive image" ></div>
		    </div>
		</div>
	</div>
@stop

