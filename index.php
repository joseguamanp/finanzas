<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="name" content="content">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo/esti.css">
</head>
<body  onkeyup="pulsar(event)">
<div class="row">
	<div class="col-lg-12" style="height: 80px;">
		<a href="#">Contar puntos<span class="badge">5</span></a>
		<a href="#">Activos<span id="activos" class="badge">3</span></a>
		<a href="#">Pasivos<span  id="pasivos" class="badge">6</span></a><br>
	</div>
</div>
<div class="row" style="height: 330px;">
	<div class="col-lg-9" id="lienzo" style="height: 329px;">
		<img class="dinero object coin move-down" src="imagen/dinero.jpg" alt="">
		<img class="dinero" src="imagen/dinero.jpg" alt="">
		<img class="dinero" src="imagen/dinero.jpg" alt="">
		<img class="dinero" src="imagen/dinero.jpg" alt="">
		<img class="dinero" src="imagen/dinero.jpg" alt="">
		<img class="dinero" src="imagen/dinero.jpg" alt="">
		<img class="dinero" src="imagen/dinero.jpg" alt="">
		<img class="dinero" src="imagen/dinero.jpg" alt="">
		<img class="dinero" src="imagen/dinero.jpg" alt="">
		<img class="dinero" src="imagen/dinero.jpg" alt="">
	</div>
	<div class="col-lg-3">
		<div class="card" style="width: 18rem;">
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item active">Reglas del juego</li>
		    <li class="list-group-item"><span class="glyphicon glyphicon-usd"></span>dinero ganas puntos</li>
		    <li class="list-group-item">deudas pierdes puntos</li>
		  </ul>
		</div>
	</div>
</div>
<div class="row">
	<img class="personaje" src="imagen/personaje.jpg" alt="">
</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/movimiento/movi.js"></script>
</html>