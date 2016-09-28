<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8"/>
    <html lang="es"/>
    <title>@yield('title')</title>
		{!!Html::style('css/bootstrap.min.css')!!}
		{!!Html::style('css/web.css')!!}
	</head>
	<body>
    @yield('content')



	{!!Html::script('js/jquery-3.1.0.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/index/index.js')!!}
	</body>
</html>