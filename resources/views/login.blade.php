<html>
	<head>
		<title>Log in</title>
	</head>
	<body style="background-image:url('images/5357-1.jpg');background-size:cover">
	<form action="{{route('home')}}" method="post">
			<table style="margin-left:35%;margin-top:15%;font-weight:bold;font-size:25">
				<tr><td>username:</td><td><input type='text' name='user' ></td></tr>
				<tr><td>password:</td><td><input type='password' name='pass' ></td></tr>
			   <tr><td><input type='submit' value='Log in' style="margin-left:130%;font-weight:bold;font-size:23;background:LightCoral"></td></tr>
			</table>
	</form>
	</body>
</html>