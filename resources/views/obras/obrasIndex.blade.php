@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col offset-5">
      <h1>Obras</h1>
    </div>
  </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-3 offset-9">
			<a href="{{ route('obras.create')}}" class="btn btn-outline-primary mb-2"> Agregar Obras</a>
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
						<th>Lugar</th>
						<th>Fecha Inicio</th>
						<th>Fecha Termino</th>
						<th>Trabajadores</th>		
					</tr>
				</thead>
				<tbody>
					@foreach($obras as $obra)
						<tr>
							<td>
								<a href="{{ route('obras.show', $obra->id)}}" class="btn btn-dark btn-sm">{{$obra->id}}</a>
							</td>
							<td>{{$obra->nombre_Obra}}</td>
							<td>{{$obra->lugar_Obra}}</td>
							<td>{{$obra->fecha_inicio->format('d/m/Y')}}</td>
							<td>{{$obra->fecha_termino->format('d/m/Y')}}</td>
							<td>
								<ul>
									@foreach($obra->trabajadores as $trabajador)
										<li>{{ $trabajador->nombre }}</li><!--Para mostrar a todos los trabajadores-->
									@endforeach
								</ul>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $obras->links() }}
		</div>
	</div>
<div class="container">
	<div class="row">
		<div class="col offset-1">
			{{ $obras->links() }}
		</div>
	</div>
</div>
	
@endsection