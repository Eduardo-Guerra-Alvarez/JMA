@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lista de Obras para Enviar Correo de Seguimiento</h3>
          </div>
          @include('partials.mensajes')
          <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Lugar</th>
                        <th>Trabajadores</th>
                        <th>Enviar Correo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($obras as $obra)
                        <tr>
                            <td>{{ $obra->id }}</td>
                            <td>{{ $obra->nombre_Obra }}</td>
                            <td>{{ $obra->lugar_Obra }}</td>
                            <td>
                                <ul>
                                    @foreach($obra->trabajadores as $trabajador)
                                        <li>{{ $trabajador->nombre }}</li><!--Para mostrar a todos los trabajadores-->
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                {{-- Enlace hacia ruta que envia correo electrónico a usuario --}}
                                <a href="{{ action('MailSeguimientoController@enviaCorreo', $obra->id) }}" class="btn btn-sm btn-success">
                                    Enviar Correo
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $obras->links() }}
          </div>
        </div>
    </div>
</div>

@endsection