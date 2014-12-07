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
		<title>Manage Order</title>
	</head>
    <body>
		{{-- */$i=1;/* --}}
    	<div class="container-fluid">
			<div class="col-xs-10 col-xs-offset-1">
				<h4>logged in as {{Auth::user()->username}}, {{HTML::linkRoute('tbsd_admin/destroy', 'log out')}}</h4>
				<h2>TBSD CONTROL PANEL</h2>

				<h4>Pending Order</h4>
				<table class="table table-striped">
					<tr>
						<td><b>num</b></td>
						<td><b>date</b></td>
						<td><b>name</b></td>
						<td><b>mail</b></td>
						<td><b>phone</b></td>
						<td><b>show id</b></td>
						<td><b>class</b></td>
						<td><b>amount</b></td>
						<td><b>confirm</b></td>
						<td><b>cancel</b></td>
					</tr>
					@foreach($orders as $order)
						@if ($order->confirmed == false)
					        <tr>
					        	<td>{{$i}}</td>
					        	<td>{{$order->created_at}}</td>
					        	<td>{{$order->name}}</td>
					        	<td>{{$order->mail}}</td>
					        	<td>{{$order->phone}}</td>
					        	<td>{{$order->show_id}}</td>
					        	<td>{{$order->class}}</td>
					        	<td>{{$order->amount}}</td>
					        	<td>{{ Form::button('Confirm', array('class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#confirm')) }}</td>
					        	<td>{{ Form::button('Cancel', array('class' => 'btn btn-danger', 'data-toggle' => 'modal', 'data-target' => '#cancel')) }}</td>
					        </tr>
					        <!-- Confirm Modal -->
							<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-body">
							      	<h3>Confirm order?</h3>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">back</button>
							      	{{HTML::linkRoute('confirm_order', 'confirm this order', array('show_id' => $order->show_id, 'class' => $order->class, 'amount' => $order->amount, 'mail' => $order->mail), array('class' => 'btn btn-primary'))}}
							      </div>
							      </div>
							    </div>
							  </div>
							</div>
					        <!-- Cancel Modal -->
							<div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-body">
							      	<p>Cancel order?</p>
							      </div>
							      <div class="modal-footer">
							      	<button type="button" class="btn btn-default" data-dismiss="modal">back</button>
							      	{{HTML::linkRoute('delete_order', 'cancel this order', array('mail' => $order->mail), array('class' => 'btn btn-danger'))}}
							      </div>
							    </div>
							  </div>
							</div>
					        {{-- */$i++;/* --}}
					    @endif
				    @endforeach
				</table>
				<h4>Confirmed Order</h4>
				<table class="table table-striped">
					<tr>
						<td><b>num</b></td>
						<td><b>date</b></td>
						<td><b>name</b></td>
						<td><b>mail</b></td>
						<td><b>phone</b></td>
						<td><b>show id</b></td>
						<td><b>class</b></td>
						<td><b>amount</b></td>
					</tr>
					@foreach($orders as $order)
						@if ($order->confirmed == true)
					        <tr>
					        	<td>{{$i}}</td>
					        	<td>{{$order->created_at}}</td>
					        	<td>{{$order->name}}</td>
					        	<td>{{$order->mail}}</td>
					        	<td>{{$order->phone}}</td>
					        	<td>{{$order->show_id}}</td>
					        	<td>{{$order->class}}</td>
					        	<td>{{$order->amount}}</td>
					        </tr>
					        {{-- */$i++;/* --}}
					    @endif
				    @endforeach
				</table>
			</div>
		</div>
    </body>
</html>