<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::style('css/homesite/header.css'); }}
		{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js'); }}
		{{ HTML::script('js/jssor.slider.mini.js'); }}
		@yield('head-data')
		@yield('tab-title')
	</head>
    <body>
    	<div class="container-fluid header">
    		<div class="row">
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab home">
			  		<a href="{{URL::route('/')}}">
			  			<h1 class="text-center nopadding">home</h1>
			  		</a>
			  	</div>
			  </div>
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab about">
			  		<a href="{{URL::route('about')}}">
			  			<h1 class="text-center nopadding">about</h1>
			  		</a>
			  	</div>
			  </div>
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab collaborate">
			  		<a href="{{URL::route('collaborate')}}">
			  			<h1 class="text-center nopadding">collaborate</h1>
			  		</a>
			  	</div>
			  </div>
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab press">
			  		<a href="{{URL::route('press')}}">
			  			<h1 class="text-center nopadding">press</h1>
			  		</a>
			  	</div>
			  </div>
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab shop">
			  		<a href="{{URL::route('shop')}}">
			  			<h1 class="text-center nopadding">shop</h1>
			  		</a>
			  	</div>
			  </div>
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab social">
			  		<a href="{{URL::route('social')}}">
			  			<h1 class="text-center nopadding">social</h1>
			  		</a>
			  	</div>
			  </div>
			</div>
    	</div>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>