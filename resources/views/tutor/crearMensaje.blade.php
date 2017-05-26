@extends('tutor.modulos.plantilla')

@section('title', 'Crear Mensaje')

@section('contenido')

<div class="row">

	<div class="col s8 offset-s2">
		<div class="card-panel green lighten-4">

			<h5>Enviar mensaje</h5>

				<form action="{{ route('datosMensaje') }}" method="POST">

				{!! csrf_field() !!}

				{{-- 	<div class="form-group{{ $errors->has('rx_user') ? ' has-error' : ''}}">
						<label for="rx_user">Nombres</label>
						<select name="rx_user" id="rx_user" class="form-control">
							<option value="">Selecciona un usuario</option>

							@foreach ($protocolos as $protocolo)
							  @if ($protocolo->user_id == Auth::user()->id) 
							     @foreach ($protocolo->manyUsers as $docente)
							     @if ($docente->id != Auth::user()->id)
							     		<option value="{{ $docente->id }}">{{ $docente->nom_docente }}</option>
							     	@endif	
							      @endforeach
							   @endif
							@endforeach

						</select>

						@if ($errors->has('rx_user'))
						<span class="help-block">{{ $errors->first('rx_user') }}</span>
						@endif
					</div> --}}

				<div class="row">
						<div class="input-field col s12">
						<select name="rx_user">
							<option value="" disabled selected>Elegir docente</option>
							@foreach ($protocolos as $protocolo)
							  @if ($protocolo->user_id == Auth::user()->id) 
							     @foreach ($protocolo->manyUsers as $docente)
							     @if ($docente->id != Auth::user()->id)
							     		<option value="{{ $docente->id }}">{{ $docente->nom_docente }}</option>
							     	@endif	
							      @endforeach
							   @endif
							@endforeach
						</select>
						<label>Elige un docente</label>
					</div>
				</div>

	
				{{-- 	<div class="form-group{{ $errors->has('asunto') ? ' has-error' : ''}}">
						<label for="asunto">Asunto</label>
						<input type="text" name="asunto" class="form-control">

						@if ($errors->has('asunto'))
						<span class="help-block">{{ $errors->first('asunto') }}</span>
						@endif
					</div> --}}

					<div class="row">
						<div class="input-field col s12">
						<input id="asunto" type="text" name="asunto" class="validate">
						<label for="asunto">Asunto</label>
					</div>
					</div>

				{{-- 	<div class="form-group{{ $errors->has('mensaje') ? ' has-error' : ''}}">
						<label for="mensaje">Mensaje</label>
						<textarea name="mensaje" id="mensaje" cols="30" rows="3" placeholder="Escribe tu mensaje" class="form-control"></textarea>

						@if ($errors->has('mensaje'))
						<span class="help-block">{{ $errors->first('mensaje') }}</span>
						@endif
					</div> --}}

					<div class="row">
						<div class="input-field col s12">
							<textarea id="mensaje" name="mensaje" class="materialize-textarea"></textarea>
							<label for="mensaje">Mensaje</label>
						</div>
					</div>

					{{-- <div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Enviar</button>
					</div> --}}

					<button class="btn waves-effect waves-light" type="submit">Enviar
						<i class="material-icons right">send</i>
					</button>
				</form>
		</div>
	</div>
</div>

@endsection

