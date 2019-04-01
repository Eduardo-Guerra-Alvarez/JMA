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
			@if(isset($trabajador))
				<h1>Editar Trabajador</h1>
				<form action="{{ route('trabajadores.update', $trabajador->id )}}" method="POST">
				<input type="hidden" name="_method" value="PATCH">
			@else
				<h1>Registro de Trabajadores</h1>
				<form action="{{ route('trabajadores.store')}}" method="POST">
			@endif
				@csrf
			  <div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input type="text" class="form-control" name="nombre" value="{{ isset($trabajador) ? $trabajador->nombre : ''}} {{ old('nombre') }}" placeholder="Nombre del Trabajador">
			    @if ($errors->has('nombre'))
                    <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
			  </div>
			  <div class="form-group">
			    <label for="IDdepartamento">Departamento</label>
			    <select name="IDdepartamento" class="form-control" >
			    	@foreach($departamento as $depa)
			    		<option value="{{ $depa->id }}" {{ isset($trabajador) && $trabajador->IDdepartamento == $depa->id ? 'selected' : '' }}>{{ $depa->nombre}}</option>
			    	@endforeach
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" value=" {{ $trabajador->email ?? ''}} {{ old('email') }}" placeholder="Correo">
			  </div>
			  <div class="form-group">
			    <label for="domicilio">Domicilio</label>
			    <input type="text" class="form-control" name="domicilio" value=" {{ $trabajador->domicilio ?? '' }} {{ old('domicilio') }}" placeholder="Domicilio">
			  </div>
			  <div class="form-group">
			    <label for="rfc">RFC</label>
			    <input type="text" class="form-control" name="rfc" value="{{ $trabajador->rfc ?? ''}} {{ old('rfc') }}" placeholder="RFC">
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection