@extends('layouts.app')
@section('content')
	<div>
		<div class="col-4 offset-4">
			@include('partials.error')
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
			    <input type="text" class="form-control" name="nombre" value="{{ isset($departamento) ? $departamento->nombre : '' }}{{ old('nombre') }}" placeholder="Nombre del Departamento">
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" value="{{ isset($departamento) ? $departamento->email : '' }}{{ old('email') }}" placeholder="Correo Electronico">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" value="{{ isset($departamento) ? $departamento->password : '' }}{{ old('password') }}" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection