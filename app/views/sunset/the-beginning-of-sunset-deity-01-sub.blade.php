<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::script('js/bootstrap.min.js'); }}
		{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-01-sub.css'); }}
		{{ HTML::style('css/jquery.countdown.css'); }}
		{{ HTML::script('js/jquery.plugin.js'); }}
		{{ HTML::script('js/jquery.countdown.min.js'); }}
		{{ HTML::script('js/sunset/the-beginning-of-sunset-deity-01-sub.js'); }}
		<link rel="shortcut icon" href="{{ asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png') }}">
		<link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
		<title>Subscribe</title>
	</head>
    <body style="background:url('../../images/sunset/the-beginning-of-sunset-deity-01/sub/background.jpg')">
    	<div class="container sunset-sub">
			<div class="row sub">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-4 col-xs-offset-4 text-center clock" >
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/jam-45.gif')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2 col-md-2 text-center back" >
				    		<a href="http://merchantofemotion.com/the-beginning-of-sunset-deity/01"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/back.png')}}" class="center-block img-responsive"></a>
						</div>
						<div class="col-xs-8 " >
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/logo.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row count">
						<div class="col-xs-8 col-xs-offset-2" >
							<div id = "timer"></div>
						</div>
					</div>
					<div class="row count-img">
						<div class="col-xs-8 col-xs-offset-2" >
							<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/count.png')}}" class="center-block img-responsive">
						</div>
					</div>
					<div class="row form">
				    	<div class="col-xs-8 col-xs-offset-2 text-center">
				    		{{Form::open(array('url' => 'newtbsdsub', 'method' => 'POST', 'class' => 'form-inline'))}}
								<div class="form-group">	
									{{Form::text('mail','', array('class' => 'form-control underlined', 'placeholder' => 'email address'))}}
								</div>
								{{Form::submit('Submit', array('class' => 'submit-button'))}}
							{{Form::close()}}
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8 col-xs-offset-2 text-center">
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
						<div class="col-xs-8 col-xs-offset-2 text-center">
							<a href="http://facebook.com/pages/Merchant-of-Emotion/917903188237791"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/facebook.png')}}" class="socmed"></a>
							<a href="http://instagram.com/merchofemotion"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/instagram.png')}}" class="socmed"></a>
							<a href="http://twitter.com/MerchofEmotion"><img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/twitter.png')}}" class="socmed"></a>
						</div>
					</div>
					<div class="row hashtag">
				    	<div class="col-xs-8 col-xs-offset-2 text-center">
				    		<img src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/sub/hashtag.png')}}" class="center-block img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>