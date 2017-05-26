<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Default')</title>
  <link rel="stylesheet" href="{{ asset('estilos/css/my-style.css') }}">
  <link rel="stylesheet" href="{{ asset('estilos/css/bootstrap.min.css') }}">


 {{-- Icons Materialize --}}
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

{!! MaterializeCSS::include_full() !!}

<link rel="stylesheet" href="{{ asset('/materialize-css/css/materialize.min.css') }}">
   
<!-- Latest compiled and minified CSS -->
{{--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}

<link rel="stylesheet" href="{{ asset('sweetalert/sweetalert.css') }}">

{{--   <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> --}}
<link rel="stylesheet" href="{{ asset('datepicker/css/bootstrap-datepicker3.css') }}">

<link rel="stylesheet" href="{{ asset('datepicker/css/bootstrap-datepicker3-standalone.css') }}">

<script src="{{ asset('datepicker/js/bootstrap-datepicker.js') }}"></script>

<script src="{{ asset('datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
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


<script src="{{ asset('/materialize-css/js/jquery.js') }}"></script>
<script src="{{ asset('/materialize-css/js/materialize.min.js') }}"></script>

<script src="/sweetalert/sweetalert.min.js"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});
</script>

<script>
    $('.datepicker').pickadate({
      format: "yyyy-mm-dd",
      language: "es",
      selectMonths: true,
      autoclose: true
    /*selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year*/
  });
</script>

<script>
   $(document).ready(function() {
    $('select').material_select();
  });
</script>

@include('sweet::alert')  


{{-- <script src="{{ asset('/materialize-css/js/jquery.js') }}"></script>
<script src="{{ asset('/materialize-css/js/materialize.min.js') }}"></script>

<script type="text/javascript">
  $('.datepicker').datepicker({
    format: "yyyy-mm-dd",
    language: "es",
    autoclose: true
  });

</script>

<script>
   $(document).ready(function() {
    Materialize.updateTextFields();
  });
</script>

<script src="/sweetalert/sweetalert.min.js"></script>

@include('sweet::alert')

<script>
   $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
</script>

<script>
  $(document).ready(function(){
    $('#modal1').modal();
  });
</script> --}}
</body>
</html>
 {{--  Compiled and minified JavaScript --}}
{{--   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> --}}