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
						<th>Trabajadores</th>	
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>{{$obra->id}}</td>
							<td>{{$obra->nombre_Obra}}</td>
							<td>{{$obra->lugar_Obra}}</td>
							<td>{{$obra->fecha_inicio}}</td>
							<td>{{$obra->fecha_termino}}</td>
							<td>
								@can('update', $obra)
									<a href="{{ route('obras.edit', $obra->id)}}" class="btn btn-sm btn-warning">Editar</a>
								@endcan

								@can('delete', $obra)
									<form action="{{ route('obras.destroy', $obra->id ) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										@csrf
										<button type="submit" class="btn btn-sm btn-danger">Borrar</button>
									</form>
								@endcan
							</td>
						</tr>
				</tbody>
			</table>

			<p>
				<ul>
					Trabajadores:
					<table class="table">
						
						<tr>
							@foreach($obra->trabajadores as $trabajador)
							<td>
								{{ $trabajador->nombre}} <!--Para mostrar a todos los trabajadores-->
							</td>
							<td>
								@can('delete', $obra)
								<form action="{{ route('obras.eliminaTrabajador', $obra->id ) }}" method="POST">
									<input type="hidden" name="trabajador_id" value="{{ $trabajador->id}}">
									@csrf
									<button type="submit" class="btn btn-sm btn-danger">Borrar</button>
								</form>
								@endcan
							</td>
							@endforeach
						</tr>
					
					</table>
					
				</ul>
			</p>
		</div>
	</div>
@endsection