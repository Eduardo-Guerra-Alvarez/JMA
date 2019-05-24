@extends('layouts.app')
@section('content')
<h1 class="offset-5">Trabajadores</h1>
<div class="container">
	<div class="row">
		<div class="col-md-7 offset-1">
			<form class="form-inline">
				@csrf
			  	<label for="filtro_nombre" class=" mr-sm-2">Buscar Trabajador:</label>
			  	<input type="text" class="form-control col-md-5 mb-2 mr-sm-2" name="filtro_nombre" placeholder="Nombre del Trabajador">
				<button type="submit" class="btn btn-primary mb-2" value="Filtrar">Buscar</button>
			</form>
		</div>
		<div class="col">
			<a href="{{ route('trabajadores.create')}}" class="btn btn-outline-primary"> Agregar Trabajadores</a>
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-8 offset-2">
			@include('partials.mensajes')
			<table class="table ">
				<thead class="table-dark">
					<tr >
						<th>ID</th>
						<th>Nombre</th>
						<!--<th>Departamento</th>-->
						<th>Domicilio</th>
						<th>Email</th>
						<th>RFC</th>
						<th>Departamento</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($trabajadores as $tra)
						<tr>
							<td>{{ $tra->id }}</td>
							<td>{{ $tra->nombre }}</td>
							<!--<td>{{ $tra->departamento_id }}</td>-->
							<td>{{ $tra->domicilio }}</td>
							<td>{{ $tra->email }}</td>
							<td>{{ $tra->rfc }}</td>
							<td>{{ $tra->departamento->nombre }}</td> <!--({{ $tra->departamento->email}})-->
							<td>
								<div class="btn-group" role="group" aria-label="Basic example">
									<a href="{{ route('trabajadores.edit', $tra->id) }}" class="btn btn-warning btn-sm">Editar</a>
									<form action="{{ route('trabajadores.destroy', $tra->id ) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										@csrf
										<button type="submit" class="btn btn-sm btn-danger">Borrar</button>
									</form>
								</div>
								
								
							</td>
						</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>

<div class="container">
	<div class="row">
		<div class="col offset-1">
			{{ $trabajadores->links() }}
		</div>
	</div>
</div>
@endsection