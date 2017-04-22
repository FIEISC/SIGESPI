@extends('admin.modulos.plantilla')

@section('title', 'Home')

@section('contenido')

@if (Session::has('info'))
	<div class="alert alert-info">
		{{ Session::get('info') }}
	</div>
@endif

<h1>Home Admin</h1>
@endsection

