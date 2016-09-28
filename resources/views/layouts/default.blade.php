<!doctype html>
<html>
	<head>
		{!!Html::style('css/bootstrap.min.css') !!}
		{!!Html::style('css/web.css') !!}
	</head>
	<body>
		<div class="container">
  			<header>
  				@include('layouts.header')
  			</header>
  			<div class="sidebar">
  				@include('layouts.sidebar')
  			</div>
  			<div class="contents">
  				@yield('content') </div>
  			<footer>
  				@include('layouts.footer')
  			</footer>
		</div>

	{!!Html::script('js/jquery-3.1.0.min.js') !!}
    {!!Html::script('js/bootstrap.min.js') !!}
	</body>
</html>