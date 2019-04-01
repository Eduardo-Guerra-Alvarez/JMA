@extends('layouts.app')
@section('content')

<h1 class="offset-5">Departamentos</h1>
	<div class="row">
		<div class="col-4 offset-4">
			<table class="table ">
				<thead class="table-dark">
					<tr >
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Password</th>
					</tr>
				</thead>
				<tbody>
					@foreach($departamentos as $depa)
						<tr>
							<td>{{ $depa->id }}</td>
							<td>{{ $depa->nombre }}</td>
							<td>{{ $depa->email }}</td>
							<td>{{ $depa->password }}</td>
						</tr>
						@endforeach
				</tbody>
			</table>
			<a href="{{ route('departamentos.create')}}" class="btn btn-outline-primary"> Agregar Departamento</a>
		</div>
	</div>

@endsection