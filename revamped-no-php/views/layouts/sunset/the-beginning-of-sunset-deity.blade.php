<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::script('js/jquery.min.js'); }}
		{{ HTML::script('js/jquery.jInvertScroll.js'); }}
		{{ HTML::style('css/jInvertScroll.css'); }}
		@yield('head-data')
		@yield('tab-title')
	</head>
    <body>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>