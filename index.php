<?php
include_once "encabezado.php";
include_once "navbar.php";
include_once "funciones.php";
session_start();
if(empty($_SESSION['usuario'])) header("location: login.php");
$cartas = [
    ["titulo" => "Total ventas", "icono" => "fa fa-coins", "total" => "$".obtenerTotalVentas(), "color" => "#b86b33"],
    ["titulo" => "Ventas hoy", "icono" => "fa fa-sun", "total" => "$".obtenerTotalVentasHoy(), "color" => "#2f6f4e"],
    ["titulo" => "Ventas semana", "icono" => "fa fa-calendar-week", "total" => "$".obtenerTotalVentasSemana(), "color" => "#8c5a2b"],
    ["titulo" => "Ventas mes", "icono" => "fa fa-calendar-alt", "total" => "$".obtenerTotalVentasMes(), "color" => "#d08a4b"],
];

$totales = [
	["nombre" => "Total productos", "total" => obtenerNumeroProductos(), "icono" => "fa fa-bread-slice"],
	["nombre" => "Ventas registradas", "total" => obtenerNumeroVentas(), "icono" => "fa fa-cash-register"],
	["nombre" => "Usuarios registrados", "total" => obtenerNumeroUsuarios(), "icono" => "fa fa-user-friends"],
	["nombre" => "Clientes registrados", "total" => obtenerNumeroClientes(), "icono" => "fa fa-heart"],
];

$ventasUsuarios = obtenerVentasPorUsuario();
$ventasClientes = obtenerVentasPorCliente();
$productosMasVendidos = obtenerProductosMasVendidos();
?>

<div class="container bakery-shell">
	<div class="bakery-hero mb-4">
		<span class="badge-bakery">Panel principal</span>
		<h1 class="mt-2">Hola, <?= $_SESSION['usuario']?> 👋</h1>
		<p class="mb-0">Resumen diario de ventas de la panadería Gian &amp; Carlos.</p>
	</div>
	<div class="card-deck row mb-4">
	<?php foreach($totales as $total){?>
		<div class="col-xs-12 col-sm-6 col-md-3" >
			<div class="card stat-card text-center h-100">
				<div class="card-body">
					<div class="stat-icon">
						<i class="<?= $total['icono']?>"></i>
					</div>
					<h4 class="card-title" >
						<?= $total['nombre']?>
					</h4>
					<h2><?= $total['total']?></h2>

				</div>

			</div>
		</div>
		<?php }?>
	</div>

	 <?php include_once "cartas_totales.php"?>

	 <div class="row mt-4">
	 	<div class="col">
			<div class="card">
				<div class="card-body">
					<h4>Ventas por usuarios</h4>
					<table class="table">
						<thead>
							<tr>
								<th>Nombre usuario</th>
								<th>Número ventas</th>
								<th>Total ventas</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($ventasUsuarios as $usuario) {?>
								<tr>
									<td><?= $usuario->usuario?></td>
									<td><?= $usuario->numeroVentas?></td>
									<td>$<?= $usuario->total?></td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>	 		
	 	</div>
	 	<div class="col">
			<div class="card">
				<div class="card-body">
					<h4>Ventas por clientes</h4>
					<table class="table">
						<thead>
							<tr>
								<th>Nombre cliente</th>
								<th>Número compras</th>
								<th>Total ventas</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($ventasClientes as $cliente) {?>
								<tr>
									<td><?= $cliente->cliente?></td>
									<td><?= $cliente->numeroCompras?></td>
									<td>$<?= $cliente->total?></td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
	 	</div>
	 </div>

	 <h4 class="mt-4">10 Productos más vendidos</h4>
	 <table class="table">
	 	<thead>
	 		<tr>
	 			<th>Producto</th>
	 			<th>Unidades vendidas</th>
	 			<th>Total</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php foreach($productosMasVendidos as $producto) {?>
	 		<tr>
	 			<td><?= $producto->nombre?></td>
	 			<td><?= $producto->unidades?></td>
	 			<td>$<?= $producto->total?></td>
	 		</tr>
	 		<?php }?>
	 	</tbody>
	 </table>
</div>	
