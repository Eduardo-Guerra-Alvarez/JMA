@extends('layouts.app')
@section('content')

<h1 class="offset-5">Trabajadores</h1>
	<div class="row">
		<div class="col-8 offset-2">
			<table class="table ">
				<thead class="table-dark">
					<tr >
						<th>ID</th>
						<th>Nombre</th>
						<th>Departamento</th>
						<th>Domicilio</th>
						<th>Email</th>
						<th>RFC</th>
								
					</tr>
				</thead>
				<tbody>
					@foreach($trabajadores as $tra)
						<tr>
							<td>{{ $tra->id }}</td>
							<td>{{ $tra->nombre }}</td>
							<td>{{ $tra->IDdepartamento }}</td>
							<td>{{ $tra->domicilio }}</td>
							<td>{{ $tra->rfc }}</td>
						</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection