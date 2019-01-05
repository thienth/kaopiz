<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		h2{
			color: red;
		}
	</style>
</head>
<body>
	<h2>Hello world!</h2>
	{{$test['name']}} - {{$test['age']}}
	<br>
	@if($test['age'] > 18)
		<h3>Du tuoi di tu</h3>
	@else
		<h3>Chua du tuoi di tu</h3>
	@endif
</body>
</html>