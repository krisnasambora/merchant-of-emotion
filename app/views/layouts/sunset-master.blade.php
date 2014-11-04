<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::script('//code.jquery.com/jquery-1.11.0.min.js'); }}
		{{ HTML::script('js/jquery.jInvertScroll.min.js'); }}
		@yield('head-data')
		@yield('tab-title')
	</head>
    <body>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>