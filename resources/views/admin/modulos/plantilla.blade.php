<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Default')</title>
  <link rel="stylesheet" href="{{ asset('estilos/css/my-style.css') }}">
  <link rel="stylesheet" href="{{ asset('estilos/css/bootstrap.min.css') }}">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  {{-- Materialize --}}
  <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.min.css') }}">
   
<!-- Latest compiled and minified CSS -->
{{--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

<link rel="stylesheet" href="{{ asset('sweetalert/sweetalert.css') }}">

{{--   <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> --}}
  <link rel="stylesheet" href="{{ asset('datePicker/css/bootstrap-datepicker3.css') }}">
  <link rel="stylesheet" href="{{ asset('datePicker/css/bootstrap-datepicker3-standalone.css') }}">
  <script src="{{ asset('datePicker/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('datePicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
</head>

<body>  
<header>
    <div class="">
       <img class="logo hidden-md hidden-sm hidden-xs" src="{{ asset('estilos/img/logo.png') }}">
       <img class="logo visible-xs-* visible-sm-* visible-md-* hidden-lg" src="{{ asset('estilos/img/logo.png') }}" width="174" height="40">
    </div>    
  </header>
  <br>
@include('admin.modulos.navbar')
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

<script>
   $(document).ready(function() {
    Materialize.updateTextFields();
  });
</script>

<script type="text/javascript">
  $('.datepicker').datepicker({
    format: "yyyy-mm-dd",
    language: "es",
    autoclose: true
  });

</script>

 {{--  Compiled and minified JavaScript --}}
{{--   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> --}}

 <script src="{{ asset('/materialize/js/materialize.min.js') }}"></script>

<script src="js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/sweetalert/sweetalert.min.js"></script>
@include('sweet::alert')  
</body>
</html>