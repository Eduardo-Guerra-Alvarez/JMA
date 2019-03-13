@include('layouts.app')
@section('content')

<h1>Materiales</h1>
	<div class="card">
		<div class="col-8 offset-2">
			<form action="{{ route('materiales.store')}}" method="POST">
				@csrf
			  <div class="form-group">
			    <label for="nombre">Material</label>
			    <input type="text" class="form-control" name="nombre" placeholder="Nombre del material">
			  </div>
			  <div class="form-group">
			    <label for="precio">Precio</label>
			    <input type="number" class="form-control" name="precio" placeholder="Precio">
			  </div>
			  <div class="form-group">
			    <label for="cantidad">Cantidad</label>
			    <input type="number" class="form-control" name="cantidad" placeholder="Cantidad">
			  </div>
			  <button type="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
	</div>