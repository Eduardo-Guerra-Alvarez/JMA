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
			@if(isset($material))
				<h1>Editar Materiales</h1>
				<form action="{{ route('materiales.update', $material->id )}}" method="POST">
				<input type="hidden" name="_method" value="PATCH">
			@else
				<h1>Registro de Materiales</h1>
				<form action="{{ route('materiales.store')}}" method="POST">
			@endif
				@csrf
			  <div class="form-group">
			    <label for="nombre">Material</label>
			    <input type="text" class="form-control" name="nombre" value="{{ isset($material) ? $material->nombre : '' }}" placeholder="Nombre del Material">
			  </div>
			  <div class="form-group">
			    <label for="precio">Precio</label>
			    <input type="number" class="form-control" name="precio" value="{{ isset($material) ? $material->precio : '' }}" placeholder="Precio" step="any">
			  </div>
			  <div class="form-group">
			    <label for="cantidad">Cantidad</label>
			    <input type="number" class="form-control" name="cantidad" value="{{ isset($material) ? $material->cantidad : '' }}" placeholder="Cantidad">
			  </div>
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection