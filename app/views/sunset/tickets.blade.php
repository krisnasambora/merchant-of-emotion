<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::script('js/jquery.jInvertScroll.js'); }}
		{{ HTML::script('js/sunset/tickets.js'); }}
		{{ HTML::style('css/jInvertScroll.css'); }}
		{{ HTML::style('css/sunset/tickets.css'); }}
		<title>Tickets</title>
	</head>
    <body>
        <div class="content">
            <div class="horizon scroll">
				<img alt="" src="{{asset('images/chapter01/titik-titik.png')}}">
			</div>
			<div class="middle scroll" id = "lights">
				<div class="element02 page">   
					<img alt="" src="{{asset('images/chapter01/cahaya.png')}}">
				</div>
				<div class="element03 page">
					<img alt="" src="{{asset('images/chapter01/nameless.png')}}">
				</div>
			</div>
			<div class="front scroll">
				<div class="element01 page">
					<img alt="" src="{{asset('images/chapter01/teks 1.png')}}">
				</div>
				<div class="element04 page">
					<img alt="" src="{{asset('images/chapter01/teks 2.png')}}">
				</div>
				<div class="element05 page">
					<img alt="" src="{{asset('images/chapter01/teks 3.png')}}">
				</div>
			</div>
        </div>
    </body>
</html>
