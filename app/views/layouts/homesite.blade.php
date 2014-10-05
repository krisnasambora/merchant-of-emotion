<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::style('css/homesite/header.css'); }}
		@yield('head-data')
		@yield('tab-title')
	</head>
    <body>
    	<div class="container-fluid header">
    		<div class="row">
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab home">
			  		<h1 class="text-center nopadding">home</h1>
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
			  		<h1 class="text-center nopadding">collaborate</h1>
			  	</div>
			  </div>
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab press">
			  		<h1 class="text-center nopadding">press</h1>
			  	</div>
			  </div>
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab shop">
			  		<h1 class="text-center nopadding">shop</h1>
			  	</div>
			  </div>
			  <div class="col-md-2 nopadding">
			  	<div class="header-tab social">
			  		<h1 class="text-center nopadding">social</h1>
			  	</div>
			  </div>
			</div>
    	</div>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>