<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
    <body>
        <div class="content">
            {{Form::open(array('route' => 'tbsd_admin/store'))}}
				{{Form::label('username', 'Username')}}<br/>
				{{Form::text('username')}}<br/>
				{{Form::label('password', 'Password')}}<br/>
				{{Form::password('password')}}<br/>
				{{Form::submit('log in')}}
			{{Form::close()}}
        </div>
    </body>
</html>