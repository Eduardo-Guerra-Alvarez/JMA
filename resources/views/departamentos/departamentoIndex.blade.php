@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
  	<div class="col">
    </div>
    <div class="col">
    </div>
    <div class="col">
      <h1 >Departamentos</h1>
    </div>
    <div class="col">
      <a href="{{ route('departamentos.create')}}" class="btn btn-outline-primary"> Agregar Departamento</a>
    </div>
    <div class="col">
    </div>
  </div>
</div>
	<div class="row">
		<div class="col-6 offset-3">
			@include('partials.mensajes')
			<table class="table ">
				<thead class="table-dark">
					<tr >
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Password</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach($departamentos as $depa)
						<tr>
							<td>{{ $depa->id }}</td>
							<td>{{ $depa->nombre }}</td>
							<td>{{ $depa->email }}</td>
							<td>{{ $depa->password }}</td>
							<td>
								<a href="{{ route('departamentos.edit', $depa->id) }}" class="btn btn-warning">Editar</a>
							</td>
						</tr>
						@endforeach
				</tbody>
			</table>
			{{ $departamentos->links() }}
		</div>
	</div>

@endsection