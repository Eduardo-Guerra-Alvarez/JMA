<!DOCTYPE html>
<html>
<head>
	<title>Bienvenida</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Bienvenida</h1>
	<p>
		Hola {{ $nombre }} {{ $apellido }} <!-- Para pasar parametros en php, como se esta en blade no se necesita
		poner <?php ?>-->
	</p>
	<p>
		Nombre Completo {{$nombre_completo}}
	</p>
</body>
</html>