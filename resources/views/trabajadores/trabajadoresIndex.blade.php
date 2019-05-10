@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col offset-4">
      <h1>Trabajadores</h1>
    </div>
    <div class="col">
      <a href="{{ route('trabajadores.create')}}" class="btn btn-outline-primary"> Agregar Trabajadores</a>
    </div>
  </div>
</div>
	<div class="row">
		<div class="col-8 offset-2">
			@include('partials.mensajes')

			{{ $trabajadores->links()}}
			<table class="table ">
				<thead class="table-dark">
					<tr >
						<th>ID</th>
						<th>Nombre</th>
						<th>Departamento</th>
						<th>Domicilio</th>
						<th>Email</th>
						<th>RFC</th>
						<th>Departamento</th>
								
					</tr>
				</thead>
				<tbody>
					@foreach($trabajadores as $tra)
						<tr>
							<td>{{ $tra->id }}</td>
							<td>{{ $tra->nombre }}</td>
							<td>{{ $tra->departamento_id }}</td>
							<td>{{ $tra->domicilio }}</td>
							<td>{{ $tra->email }}</td>
							<td>{{ $tra->rfc }}</td>
							<td>{{ $tra->departamento->nombre }}</td> <!--({{ $tra->departamento->email}})-->
							<td>
								<a href="{{ route('trabajadores.edit', $tra->id) }}" class="btn btn-warning btn-sm"> Editar</a>
								<form action="{{ route('trabajadores.destroy', $tra->id ) }}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									@csrf
									<button type="submit" class="btn btn-sm btn-danger">Borrar</button>
								</form>
							</td>
						</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection