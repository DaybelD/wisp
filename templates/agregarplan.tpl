{include file="cab2.tpl" titulo="Agregar cliente"}
	<nav>
		<ol class="breadcrumb p-2 text-dark rounded">
				<li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="planes.php">Planes</a></li>
				<li class="breadcrumb-item">Agregar plan</li>
			</ol>
		</nav>
<div class="card p-2">
	<div class="mb-3">
		<div class="container">
			<div class="col-lg-4 offset-lg-4">
			{$agregarplan}
		</div>
		</div>
	</div>
</div>


{include file="pie2.tpl"}