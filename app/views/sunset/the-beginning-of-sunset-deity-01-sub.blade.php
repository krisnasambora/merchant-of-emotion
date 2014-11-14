<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::script('js/bootstrap.min.js'); }}
		{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-01-sub.css'); }}
		<link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
	</head>
    <body>
    	<div class="container-fluid">
			<div class="row sub" style="background:url('../../images/sunset/the-beginning-of-sunset-deity-01/sub/background.jpg')">
				<div class="container-fluid">
					<div class="row back">
						<div class="col-md-2 text-center" >
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/back.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4" >
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/jam-45.gif')}}" class="center-block">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4" >
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/logo.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-5" >
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3" >
							<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/count.png')}}" class="center-block">
						</div>
					</div>
					<div class="row form">
				    	<div class="col-md-4 col-md-offset-4 text-center">
				    		{{Form::open(array('url' => 'newtbsdsub', 'method' => 'POST', 'class' => 'form-inline'))}}
								<div class="form-group">	
									{{Form::text('mail','', array('class' => 'form-control underlined', 'placeholder' => 'email address'))}}
								</div>
								{{Form::submit('Submit', array('class' => 'submit-button'))}}
							{{Form::close()}}
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4 text-center">
							@if(Session::has('success'))
							    <div class="alert-box success">
							        <h6>{{ Session::get('success') }}</h6>
							    </div>
							@elseif(Session::has('failure'))
							    <div class="alert-box failure">
							        <h6>{{ Session::get('failure') }}</h6>
							    </div>
							@endif
						</div>
					</div>
					<div class="row socmed">
						<div class="col-md-4 col-md-offset-4 text-center">
							<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/facebook.png')}}" class="socmed">
							<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/instagram.png')}}" class="socmed">
							<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/twitter.png')}}" class="socmed">
						</div>
					</div>
					<div class="row hashtag">
				    	<div class="col-md-4 col-md-offset-4 text-center">
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/hashtag.png')}}" class="center-block img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>