@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
  	<div class="col">
    </div>
    <div class="col">
      <h1 >Materiales</h1>
    </div>
    <div class="col">
      <a href="{{ route('materiales.create')}}" class="btn btn-outline-primary">Agregar Material</a>
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
								<a href="{{route('materiales.show', $dep->id)}}">Detalles</a>
							</td>
						</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection
	