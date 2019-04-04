@extends('layouts.app')
@section('content')
	<div>
		<div class="col-4 offset-4">
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			@if(isset($obra))
				<h1>Editar Obras</h1>
				<form action="{{ route('obras.update', $obras->id )}}" method="POST">
				<input type="hidden" name="_method" value="PATCH">
			@else
				<h1>Registro de Obras</h1>
				<form action="{{ route('obras.store')}}" method="POST">
			@endif
				@csrf
			  <div class="form-group">
			    <label for="nombre_Obra">Obra</label>
			    <input type="text" class="form-control" name="nombre_Obra" value="" placeholder="Nombre de la Obra">
			  </div>
			  <div class="form-group">
			    <label for="lugar_Obra">Lugar</label>
			    <input type="text" class="form-control" name="lugar_Obra" value="" placeholder="Lugar de la Obra">
			  </div>
			  <div class="form-group">
			    <label for="trabajador_id">Trabajadores</label>
			    <select name="trabajador_id[]" class="form-control" multiple>
			    	@foreach($trabajadores as $traba)
			    		<option value="{{ $traba->id }}" {{ isset($obra) && $obra->trabajador_id == $traba->id ? 'selected' : '' }}>{{ $traba->nombre}}</option>
			    	@endforeach
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="fecha_inicio">Fecha Inicio</label>
			    <input type="date" class="form-control" name="fecha_inicio" value="" placeholder="Fecha de Inicio">
			  </div>
			  <div class="form-group">
			    <label for="fecha_termino">Fecha Termino</label>
			    <input type="date" class="form-control" name="fecha_termino" value="" placeholder="Fecha que termino">
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection