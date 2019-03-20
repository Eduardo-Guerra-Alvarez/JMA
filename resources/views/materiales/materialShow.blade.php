@extends('layouts.app')

@section('content')
	<h1>Detalles de materiales</h1>
	<div class="row">
		<div class="col-8 offset-2">
			<table class="table ">
				<thead class="table-dark">
					<tr >
						<th>ID</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Cantidad</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>{{ $material->id}}</td>
							<td>{{ $material->nombre}}</td>
							<td>{{ $material->precio}}</td>
							<td>{{ $material->cantidad}}</td>
							<td>
								<a href="{{ route('materiales.edit', $material->id)}}" class="btn btn-sm btn-warning">Editar</a>

								<form action="{{ route('materiales.destroy', $material->id ) }}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									@csrf
									<button type="submit" class="btn btn-sm btn-danger">Borrar</button>
								</form>
								
							</td>
						</tr>
				</tbody>
			</table>
		</div>
	</div>
	
@endsection