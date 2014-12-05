<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::script('js/bootstrap.min.js'); }}
		<link rel="shortcut icon" href="{{ asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png') }}">
		<link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
		<title>Get Tickets!</title>
	</head>
    <body style="background:url('../../images/sunset/the-beginning-of-sunset-deity-01/sub/background.jpg')">
    	<div class="container sunset-sub">
			<div class="row sub">
				<div class="container-fluid">
					<div class="row form">
				    	<div class="col-xs-8 col-xs-offset-2 text-center">
				    			<h1>GET YOUR TICKETS</h1>
					    		{{Form::open(array('url' => 'new_TBSD_order', 'method' => 'POST', 'role' => 'form'))}}
									<div class="form-group">	
										{{Form::text('name','', array('class' => 'form-control underlined', 'placeholder' => 'name'))}}
									</div>
									<div class="form-group">	
										{{Form::text('mail','', array('class' => 'form-control underlined', 'placeholder' => 'email address'))}}
									</div>
									<div class="form-group">	
										{{Form::text('phone','', array('class' => 'form-control underlined', 'placeholder' => 'phone number'))}}
									</div>
									<h1>SHOW</h1>
									<div class="form-group">
										<label class="radio-inline">
										 	{{Form::radio('show_id', '1', true)}} 1
										</label>
										<label class="radio-inline">
											{{Form::radio('show_id', '2')}} 2
										</label>
										<label class="radio-inline">
											{{Form::radio('show_id', '3')}} 3
										</label>
										<label class="radio-inline">
										 	{{Form::radio('show_id', '4')}} 4
										</label>
										<label class="radio-inline">
											{{Form::radio('show_id', '5')}} 5
										</label>
										<label class="radio-inline">
											{{Form::radio('show_id', '6')}} 6
										</label>
									</div>
									<h1>CLASS</h1>
									<div class="form-group">
										<label class="radio-inline">
										 	{{Form::radio('class', '1', true)}} 1
										</label>
										<label class="radio-inline">
											{{Form::radio('class', '2')}} 2
										</label>
									</div>
									<h1>AMOUNT</h1>
									<div class="form-group">
										{{Form::select('amount', array('1' => '1', '2' => '2', '3' => '3', '4' => '4'), '1', ['class' => 'form-control'])}}
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prompt">
											Order Tickets
										</button>
										<!-- Modal -->
										<div class="modal fade" id="prompt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										  <div class="modal-dialog">
										    <div class="modal-content">
										      <div class="modal-body">
										      	<h2>order tickets?</h2>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										        {{Form::submit('Order', array('class' => 'btn btn-primary'))}}
										      </div>
										    </div>
										  </div>
										</div>
									</div>
								{{Form::close()}}
						</div>
					</div>
					<div class="row">
						<div class="col-xs-8 col-xs-offset-2 text-center">
							@if(Session::has('success'))
							    <div class="alert-box success">
							        <h5>{{ Session::get('success') }}</h5>
							    </div>
							@elseif(Session::has('failure'))
							    <div class="alert-box failure">
							        <h5>{{ Session::get('failure') }}</h5>
							    </div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>