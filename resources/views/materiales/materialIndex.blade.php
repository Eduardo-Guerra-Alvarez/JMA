@extends('layouts.app')
@section('content')

<div class="container">
	  <div class="row">
	    <div class="col-5 offset-5">
	      <h1 >Materiales</h1>
	  </div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-4 offset-8">
			<a href="{{ route('materiales.create')}}" class="btn btn-outline-primary mb-2">Agregar Material</a>
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
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Acciones</th>
							
				</tr>
			</thead>
			<tbody>
				@foreach($materiales as $dep)
					<tr>
						<td>{{ $dep->id }}</td>
						<td>{{ $dep->nombre }}</td>
						<td>{{ $dep->precio }}</td>
						<td>{{ $dep->cantidad }}</td>
						<td>
							<a href="{{route('materiales.show', $dep->id)}}" class="btn btn-sm btn-dark">Detalles</a>
						</td>
					</tr>
					@endforeach
			</tbody>
		</table>
		{{ $materiales->links()}}
	</div>
</div>

@endsection
	