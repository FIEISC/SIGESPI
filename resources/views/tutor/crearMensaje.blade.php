@extends('tutor.modulos.plantilla')

@section('title', 'Crear Mensaje')

@section('contenido')

<div class="row">
	<div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">

		<div class="panel panel-default">

			<div class="panel-heading"><h2>Enviar mensaje</h2></div>

			<div class="panel-body">

				<form action="{{ route('datosMensaje') }}" method="POST">

				{!! csrf_field() !!}
					<div class="form-group{{ $errors->has('rx_user') ? ' has-error' : ''}}">
						<label for="rx_user">Nombres</label>
						<select name="rx_user" id="rx_user" class="form-control">
							<option value="">Selecciona un usuario</option>

							{{-- @foreach ($users as $user)
								<option value="{{ $user->id }}">{{ $user->name }}</option>
							@endforeach --}}

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
					</div>

					<div class="form-group{{ $errors->has('asunto') ? ' has-error' : ''}}">
						<label for="asunto">Asunto</label>
						<input type="text" name="asunto" class="form-control">

						@if ($errors->has('asunto'))
						<span class="help-block">{{ $errors->first('asunto') }}</span>
						@endif
					</div>

					<div class="form-group{{ $errors->has('mensaje') ? ' has-error' : ''}}">
						<label for="mensaje">Mensaje</label>
						<textarea name="mensaje" id="mensaje" cols="30" rows="3" placeholder="Escribe tu mensaje" class="form-control"></textarea>

						@if ($errors->has('mensaje'))
						<span class="help-block">{{ $errors->first('mensaje') }}</span>
						@endif
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

