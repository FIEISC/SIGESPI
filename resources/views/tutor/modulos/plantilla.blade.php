<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')</title>
	<link rel="stylesheet" href="{{ asset('estilos/css/my-style.css') }}">
    <link rel="stylesheet" href="{{ asset('estilos/css/bootstrap.min.css') }}">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<header>
    <div class="">
       <img class="logo hidden-md hidden-sm hidden-xs" src="{{ asset('estilos/img/logo.png') }}">
       <img class="logo visible-xs-* visible-sm-* visible-md-* hidden-lg" src="{{ asset('estilos/img/logo.png') }}" width="174" height="40">
    </div>    
  </header>
 
  @include('tutor.modulos.navbar')
  <div class="container">
  	@yield('contenido')
  </div>

  <footer class="footer-distributed">
	<div class="footer-left">
		<p class="footer-links">
			<a href="#">Link1</a> - <a href="#">Link2</a> - <a href="#">Link3</a>
		</p>
		<p>SIGESPI 2017 | Developed by Naty <span class="glyphicon glyphicon-heart-empty"></span></p>
	</div>
</footer>
	
</body>
</html>