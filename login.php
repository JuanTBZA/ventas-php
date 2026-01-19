<?php
include_once "encabezado.php";
?>
<div class="container login-wrapper">
    <div class="row g-4 align-items-stretch w-100">
        <div class="col-lg-6">
            <div class="login-side h-100">
                <span class="bakery-pill"><i class="fa fa-bread-slice"></i> Panadería</span>
                <h2>Gian &amp; Carlos</h2>
                <p>Gestiona las ventas diarias, el inventario y los clientes con una vista clara y moderna.</p>
                <div class="mt-4">
                    <p class="mb-2"><i class="fa fa-check-circle"></i> Ventas rápidas en mostrador</p>
                    <p class="mb-2"><i class="fa fa-check-circle"></i> Reportes por día, semana y mes</p>
                    <p class="mb-0"><i class="fa fa-check-circle"></i> Control de clientes frecuentes</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="login-card h-100">
                <h3 class="mb-3">Iniciar sesión</h3>
                <p class="text-muted">Bienvenido nuevamente. Accede al sistema de ventas de la panadería.</p>
                <div>
                    <form action="iniciar_sesion.php" method="post">
                        <div class="form-group pb-3">
                            <label class="form-label">Usuario</label>
                            <input type="text" placeholder="Ingresa tu usuario" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" placeholder="••••••••" class="form-control" name="password" id="exampleInputPassword1">
                        </div>

                        <div class="pb-2">
                            <button type="submit" name="ingresar" class="btn btn-primary w-100 font-weight-bold mt-2">Ingresar</button>
                        </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>
