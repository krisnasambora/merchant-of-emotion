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
        </div>
    </body>
</html>
