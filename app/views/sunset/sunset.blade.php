@extends('layouts.sunset-master')

@section('head-data')
	{{ HTML::style('css/bootstrap.min.css'); }}
	{{ HTML::style('css/sunset/sunset.css'); }}
	{{ HTML::script('js/sunset/sunset.js'); }}
@stop

@section('tab-title')
	<title>The Beginning of Sunset Deity</title>
@stop

@section('content')
	<div class = "container-fluid">
		<div class = "row">
			<div class="col-md-1 centered lang">
				<p class="text-center">eng | ind</p>
			</div>
		</div>
		<div class = "row" id = "story">
			<div class = "col-md-1 centered">
				<div id = "get-prev">
					<p class="text-center">prev</p>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-3 centered">
				<div id = "slide-text">
					<p class="text-center narration">At first, I was a boy.</p>
					<p class="text-center narration">But then...</p>
				</div>
			</div>
			<div class = "col-md-1 col-md-offset-3 centered">
				<div id = "get-next">
					<p class="text-center">next</p>
				</div>
			</div>
		</div>
		<div class  = "row" id = "hashtag">
			<div class="col-md-4 col-md-offset-4 centered">
				<p class="text-center"><strong>#thingslostandforgotten</strong></p>
			</div>
		</div>
	</div>
@stop

