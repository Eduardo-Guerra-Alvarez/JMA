@extends('layouts.app')
@section('content')
	<div>
		<div class="col-4 offset-4">
			@include('partials.error')
			@if(isset($obra))
				<h1>Editar Obras</h1>
				<form action="{{ route('obras.update', $obra->id )}}" method="POST">
				<input type="hidden" name="_method" value="PATCH">
			@else
				<h1>Registro de Obras</h1>
				<form action="{{ route('obras.store')}}" method="POST">
			@endif
				@csrf

			  <div class="form-group">
			    <label for="nombre_Obra">Obra</label>
			    <input type="text" class="form-control" name="nombre_Obra" value="{{ isset($obra) ? $obra->nombre_Obra : '' }}{{ old('nombre_Obra') }}" placeholder="Nombre de la Obra">
			  </div>
			  <div class="form-group">
			    <label for="lugar_Obra">Lugar</label>
			    <input type="text" class="form-control" name="lugar_Obra" value="{{ isset($obra) ? $obra->lugar_Obra : '' }}{{ old('lugar_Obra')}}" placeholder="Lugar de la Obra">
			  </div>
			  <div class="form-group">
			    <label for="trabajadores_id">Trabajadores</label>
			    <select name="trabajadores_id[]" class="form-control" multiple>
			    	@foreach($trabajadores as $trabajador)
			    		<option value="{{ $trabajador->id }}" {{ isset($obra) && array_search($trabajador->id, $obra->trabajadores->pluck('id')->toArray()) !== false ? 'selected' : '' }}>{{ $trabajador->nombre}}</option>
			    	@endforeach
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="fecha_inicio">Fecha Inicio</label>
			    <input type="date" class="form-control" name="fecha_inicio" value="{{ isset($obra) ? $obra->fecha_inicio->toDateString() : '' }}{{ old('fecha_inicio')}}">
			    <!-- Se pone toDateString para el formato Carbon a la hora de editar -->
			  </div>
			  <div class="form-group">
			    <label for="fecha_termino">Fecha Termino</label>
			    <input type="date" class="form-control" name="fecha_termino" value="{{ isset($obra) ? $obra->fecha_termino->toDateString() : '' }}{{ old('fecha_termino')}}">
			    <!-- Se pone toDateString para el formato Carbon a la hora de editar -->
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>
@endsection