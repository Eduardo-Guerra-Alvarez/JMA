@extends('layouts.app')

@section('content')
	<h1 class="offset-5">Detalles de materiales</h1>
	<div class="row">
		<div class="col-5 offset-4">
			<table class="table ">
				<thead class="table-dark">
					<tr >
						<th>ID</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>{{ $material->id}}</td>
							<td>{{ $material->nombre}}</td>
							<td>{{ $material->precio}}</td>
							<td>{{ $material->cantidad}}</td>
							<td>
								<div class="btn-group" role="group" aria-label="Basic example">
									<a href="{{ route('materiales.edit', $material->id)}}" class="btn btn-sm btn-warning">Editar</a>

									<form action="{{ route('materiales.destroy', $material->id ) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										@csrf
										<button type="submit" class="btn btn-sm btn-danger">Borrar</button>
									</form>
								</div>
							</td>
						</tr>
				</tbody>
			</table>
		</div>
	</div>
	
@endsection