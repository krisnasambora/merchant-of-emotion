@extends('layouts.homesite')

@section('head-data')
	{{ HTML::style('css/homesite/collaborate.css'); }}
@stop

@section('tab-title')
	<title>Welcome</title>
@stop

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<h3 class="text-justify">Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h3>
		{{Form::open(array('url' => 'newcollaborator', 'method' => 'POST', 'class' => 'clearfix'))}}
			<div class="form-group">	
				{{Form::label('name', 'Name')}}<br/>
				{{Form::text('name','', array('class' => 'form-control'))}}
			</div>
			<div class="form-group">	
				{{Form::label('mail', 'Mail')}}<br/>
				{{Form::text('mail','', array('class' => 'form-control'))}}
			</div>
			<div class="form-group">	
				{{Form::label('desc', 'Description')}}<br/>
				{{Form::textarea('desc','', array('class' => 'form-control'))}}
			</div>
			{{Form::submit('Submit', array('class' => 'btn btn-default'))}}
		{{Form::close()}}
	</div>
@stop

