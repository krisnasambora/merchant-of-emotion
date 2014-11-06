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
				<img alt="" src="{{asset('images/bg.jpg')}}">
			</div>
			<div class="front scroll" id = "front-scroll">
				<div class="description page" id ="description">
					<h2>WHOOP-DEE-DOO</h2>
					<p>WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.</p>
				</div>
				<div class="excerpt" id = "excerpt">
					<h2>WHOOP-DEE-DOO</h2>
					<p>WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.</p>
				</div>
				<div class="tickets" id = "tickets">
					<h2>WHOOP-DEE-DOO</h2>
					<p>WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.WHOOP-DEE-DOO.</p>
				</div>
			</div>
        </div>
    </body>
</html>
