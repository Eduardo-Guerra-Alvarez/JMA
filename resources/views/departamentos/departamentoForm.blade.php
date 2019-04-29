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
			@if(isset($departamento))
				<h1>Editar Departamento</h1>
				<form action="{{ route('departamentos.update', $departamento->id )}}" method="POST">
				<input type="hidden" name="_method" value="PATCH">
			@else
				<h1>Registro de Departamentos</h1>
				<form action="{{ route('departamentos.store')}}" method="POST">
			@endif
				@csrf
			  <div class="form-group">
			    <label for="nombre">Departamento</label>
			    <input type="text" class="form-control" name="nombre" value="{{ isset($departamento) ? $departamento->nombre : '' }} {{ old('nombre') }}" placeholder="Nombre del Departamento">
			    @if ($errors->has('nombre'))
                    <div class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                    </div>
                @endif
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" value="{{ isset($departamento) ? $departamento->email : '' }}{{ old('email') }}" placeholder="Correo Electronico">
			    @if ($errors->has('nombre'))
                    <div class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" value="{{ isset($departamento) ? $departamento->password : '' }}{{ old('password') }}" placeholder="Password">
			    @if ($errors->has('nombre'))
                    <div class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                    </div>
                @endif
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection