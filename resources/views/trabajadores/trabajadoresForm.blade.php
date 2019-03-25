@extends('layouts.app')
@section('content')
	<div>
		<div class="col-4 offset-4">
				<h1>Registro de Trabajadores</h1>
				<form action="{{ route('trabajadores.store')}}" method="POST">
				@csrf
			  <div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input type="text" class="form-control" name="nombre" value="" placeholder="Nombre del Trabajador">
			    @if ($errors->has('nombre'))
                    <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" value="" placeholder="Correo">
			  </div>
			 <div class="form-group">
			    <label for="departamento">Departamento</label>
			    <select name="IDdepartamento" class="form-control" >
			    	@foreach($depar as $depa)
			    		<option value="{{ $depa->id }}">{{ $depa->nombre}}></option>
			    	@endforeach
			    </select>
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection