<h3>{{$trabajador->nombre}}</h3>
<p>Fuiste combocado en la Obra: </p>
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
						<tr>
							<td>{{$obra->id}}</td>
							<td>{{$obra->nombre_Obra}}</td>
							<td>{{$obra->lugar_Obra}}</td>
							<td>{{$obra->fecha_inicio->format('d/m/Y')}}</td>
							<td>{{$obra->fecha_termino->format('d/m/Y')}}</td>
						</tr>
				</tbody>
			</table>
