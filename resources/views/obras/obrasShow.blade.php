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



	<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Carga de Archivos</h3>
            </div>
            <div class="card-body">
                @include('archivos.archivoUpload', ['modelo_id' => $obra->id, 'modelo_type' => 'Obra'])
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Archivos</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    @foreach($obra->archivos as $archivo)
                        <tr>
                            <td>
                                <a href="{{ route('archivo.show', $archivo->id) }}">{{ $archivo->nombre }}</a>
                            </td>
                            <td>
                                {!! Form::open(['route' => ['archivo.destroy', $archivo->id], 'method' => 'delete']) !!}
                                    <input type="hidden" name="accion" value="borrar">
                                    <button class="btn btn-sm btn-danger form-pill borrar-archivo" type="submit" id="archivo_{{ $archivo->id }}">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Borrar
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection