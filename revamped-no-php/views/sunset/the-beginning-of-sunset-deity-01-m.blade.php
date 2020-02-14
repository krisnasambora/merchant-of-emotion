<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.jInvertScroll.js"></script>
    <link rel="stylesheet" href="../../css/jInvertScroll.css">

    <script type="text/javascript" src="../../js/scale.js"></script>
    <script type="text/javascript" src="../../js/sunset/the-beginning-of-sunset-deity-01.js"></script>
    <link rel="stylesheet" href="../../css/sunset/the-beginning-of-sunset-deity-01.css">
    <link rel="shortcut icon" href="../../images/sunset/the-beginning-of-sunset-deity-01/nameless.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="At first, I was a boy. Stranded as the first thing The Creator created, long before the living world that we know today. Even before time.">
    
    <title>The Beginning of Sunset Deity: 01</title>
	</head>
  <body>
    <div class="content">
      <div id="loader">
        <img src="../../images/sunset/the-beginning-of-sunset-deity-01/loading.gif" width="40%">
      </div> 
      <div id="main_bg" class="scroll">
        <img alt="" src="../../images/sunset/the-beginning-of-sunset-deity-01/titik-titik.jpg">
      </div>
      <div id="l01" class="scroll">
        <div id="element-02" class="page">   
          <img alt="" src="../../images/sunset/the-beginning-of-sunset-deity-01/cahaya.png">
        </div>
        <div id="element-03" class="page">
          <img alt="" src="../../images/sunset/the-beginning-of-sunset-deity-01/nameless.png">
        </div>
      </div>
      <div id="l02" class="scroll">
        <div id="element-01" class="page">
          <img alt="" src="">
        </div>
        <div id="element-04" class="page">
          <img alt="" src="../../images/sunset/the-beginning-of-sunset-deity-01/2.png">
        </div>
        <div id="element-05" class="page">
          <img alt="" src="../../images/sunset/the-beginning-of-sunset-deity-01/3.gif">
        </div>
        <div id="element-06" class="page">
          <a href="./the-beginning-of-sunset-deity-02-scalable.html"><img alt="" src="../../images/sunset/the-beginning-of-sunset-deity-01/next.png"></a>
        </div>
      </div>
    </div>
  </body>
</html>




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


