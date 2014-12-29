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
		{{-- */$j=1;/* --}}
		{{-- */$k=1;/* --}}
    	<div class="container-fluid">
			<div class="col-xs-10 col-xs-offset-1">
				<h4>Logged in as {{Auth::user()->username}}, {{HTML::linkRoute('tbsd_admin/destroy', 'log out')}}.</h4>
				<h2>THE BEGINNING OF SUNSET DEITY CONTROL PANEL</h2>

				<h4>Seats</h4>
				<table class="table table-striped">
					<tr>
						<td><b>num</b></td>
						<td><b>date and time</b></td>
						<td><b>class</b></td>
						<td><b>confirmed</b></td>
						<td><b>capacity</b></td>
					</tr>
					@foreach($shows as $show)
				        <tr>
				        	<td>{{$k}}</td>
				        	@if ($show->show_id == 1)
				        		<td>23 Januari 2015, 16:00 </td>
				        	@elseif ($show->show_id == 2)
				        		<td>23 Januari 2015, 19:30 </td>
				        	@elseif ($show->show_id == 3)
				        		<td>24 Januari 2015, 16:00 </td>
				        	@elseif ($show->show_id == 4)
				        		<td>24 Januari 2015, 19:30 </td>
				        	@elseif ($show->show_id == 5)
				        		<td>25 Januari 2015, 16:00 </td>
				        	@elseif ($show->show_id == 6)
				        		<td>25 Januari 2015, 19:30 </td>
				        	@endif
				        	@if ($show->class == 1)
				        		<td>REGULER </td>
				        	@elseif ($show->class == 2)
				        		<td>VIP </td>
				        	@endif
				        	<td>{{$show->confirmed}}</td>
				        	<td>{{$show->capacity}}</td>
				        </tr>
				        {{-- */$k++;/* --}}
				    @endforeach
				</table>

				<h4>Pending Order</h4>
				<table class="table table-striped">
					<tr>
						<td><b>num</b></td>
						<td><b>date</b></td>
						<td><b>order id</b></td>
						<td><b>name</b></td>
						<td><b>mail</b></td>
						<td><b>phone</b></td>
						<td><b>show id</b></td>
						<td><b>class</b></td>
						<td><b>amount</b></td>
						<td><b>price</b></td>
						<td><b>status</b></td>
						<td><b>confirm</b></td>
						<td><b>cancel</b></td>
					</tr>
					@foreach($orders as $order)
						@if ($order->status != 'Confirmed')
					        <tr>
					        	<td>{{$i}}</td>
					        	<td>{{$order->created_at}}</td>
					        	<td>{{$order->order_id}}</td>
					        	<td>{{$order->name}}</td>
					        	<td>{{$order->mail}}</td>
					        	<td>{{$order->phone}}</td>
					        	<td>{{$order->show_id}}</td>
					        	<td>{{$order->class}}</td>
					        	<td>{{$order->amount}}</td>
					        	<td>{{$order->price}}</td>
					        	<!-- set expiration -->
					        	<td>{{$order->status}}</td>
					        	<td>{{HTML::linkRoute('confirm_order', 'confirm', array('name' => $order->name, 'phone' => $order->phone,'order_id' => $order->order_id,'show_id' => $order->show_id, 'class' => $order->class, 'amount' => $order->amount, 'mail' => $order->mail), array('class' => 'btn btn-primary'))}}</td>
					        	<td>{{HTML::linkRoute('delete_order', 'cancel', array('name' => $order->name, 'phone' => $order->phone,'order_id' => $order->order_id,'show_id' => $order->show_id, 'class' => $order->class, 'amount' => $order->amount, 'mail' => $order->mail), array('class' => 'btn btn-danger'))}}</td>
					        </tr>
					        {{-- */$i++;/* --}}
					    @endif
				    @endforeach
				</table>
				<h4>Confirmed Order</h4>
				<table class="table table-striped">
					<tr>
						<td><b>num</b></td>
						<td><b>date</b></td>
						<td><b>order id</b></td>
						<td><b>name</b></td>
						<td><b>mail</b></td>
						<td><b>phone</b></td>
						<td><b>show id</b></td>
						<td><b>class</b></td>
						<td><b>amount</b></td>
						<td><b>price</b></td>
					</tr>
					@foreach($orders as $order)
						@if ($order->status == 'Confirmed')
					        <tr>
					        	<td>{{$j}}</td>
					        	<td>{{$order->created_at}}</td>
					        	<td>{{$order->order_id}}</td>
					        	<td>{{$order->name}}</td>
					        	<td>{{$order->mail}}</td>
					        	<td>{{$order->phone}}</td>
					        	<td>{{$order->show_id}}</td>
					        	<td>{{$order->class}}</td>
					        	<td>{{$order->amount}}</td>
					        	<td>{{$order->price}}</td>
					        </tr>
					        {{-- */$j++;/* --}}
					    @endif
				    @endforeach
				</table>
			</div>
		</div>
    </body>
</html>