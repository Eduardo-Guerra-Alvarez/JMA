@extends('layouts.app')

@section('content')
	<h1 class="offset-5">Obras</h1>
	<div class="row">
		<div class="col-8 offset-2">
			{{ $obras->links() }}
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
							<td>{{$obra->fecha_inicio}}</td>
							<td>{{$obra->fecha_termino}}</td>
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
			<a href="{{ route('obras.create')}}" class="btn btn-outline-primary"> Agregar Obras</a>
		</div>
	</div>
	
@endsection