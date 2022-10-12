{include file="cab2.tpl" titulo="Modificar proveedores"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Modificar proveedor</h3>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="proveedores.php">Proveedores</a></li>
        <li class="breadcrumb-item">Modificar proveedor</li>
      </ol>
    </nav>
</div>
<div class="card p-4">
	<div class="mb-3">
		<div class="container">
			<div class="col-lg-4 offset-lg-4">
			{$modprov}
		</div>
		</div>
	</div>
</div>


{include file="pie2.tpl"}