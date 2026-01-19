<?php
include_once "encabezado.php";
?>


	<div class="card-deck row">
		<?php foreach($cartas as $carta){?>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="card stat-card text-center h-100" style="border-top: 4px solid <?=  $carta['color']?>;">
				<div class="card-body">
					<div class="stat-icon" style="color: <?=  $carta['color']?>; background: rgba(0, 0, 0, 0.04);">
						<i class="<?= $carta['icono']?>"></i>
					</div>
					<h4 class="card-title">
						<?= $carta['titulo']?>
					</h4>
					<h2><?= $carta['total']?></h2>

				</div>

			</div>
		</div>
		<?php }?>
	</div>
