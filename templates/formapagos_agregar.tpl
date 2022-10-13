{include file="cab2.tpl" titulo="Agregar forma de pago"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>Agregar forma de pago</h3>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="formapagos.php">Formas de pago</a></li>
        <li class="breadcrumb-item">Agregar nueva forma de pago</li>
      </ol>
    </nav>
</div>
<div class="card p-2">
	<div class="mb-3">
		<div class="container">
			<div class="col-lg-4 offset-lg-4">
			{$agregarfrpago}
		</div>
		</div>
	</div>
</div>


{include file="pie2.tpl"}