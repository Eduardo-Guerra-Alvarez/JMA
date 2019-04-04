@extends('layouts.app')

@section('content')
	<h1 class="offset-5">Obras</h1>
	<div class="row">
		<div class="col-8 offset-2">
			<table class="table ">
				<thead class="table-dark">
					<tr >
						<th>ID</th>
						<th>Nombre</th>
						<th>Lugar</th>
						<th>Fecha Inicio</th>
						<th>Fecha Termino</th>		
					</tr>
				</thead>
				<tbody>
					@foreach($obras as $obra)
						<tr>
							<td>{{$obra->id}}</td>
							<td>{{$obra->nombre_Obra}}</td>
							<td>{{$obra->lugar_Obra}}</td>
							<td>{{$obra->fecha_inicio}}</td>
							<td>{{$obra->fecha_termino}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{ route('obras.create')}}" class="btn btn-outline-primary"> Agregar Obras</a>
		</div>
	</div>
	
@endsection