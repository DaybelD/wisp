{include file="cab2.tpl" titulo="Modificar instalacion"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>Modificar instalacion</h3>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="instalaciones.php">Instalaciones</a></li>
        <li class="breadcrumb-item">Modificar instalaciones</li>
      </ol>
    </nav>
</div>
<div class="card p-2">
	<div class="mb-3">
		<div class="container">
			<div class="col-lg-4 offset-lg-4">
			{$modinstal}
			</div>
		</div>
	</div>
</div>


{include file="pie2.tpl"}