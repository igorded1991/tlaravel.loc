<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
</head>
<body>

<form action="/comments" method="POST">
	{!! csrf_field() !!}
	
	Имя:
	<input type="text" name="name"/><br />
	Комментарий:<br />
	<textarea name="text"></textarea>
	<!--<input type="hidden" name="_method" value="PUT">-->
	
	<br />
	<input type="submit" value="Добавить"/>
	
</form>

</body>
</html>