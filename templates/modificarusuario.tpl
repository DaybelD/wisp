{include file="cab2.tpl" titulo="Modificar usuario"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>Modificar usuario</h3>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="usuarios.php">Usuarios</a></li>
        <li class="breadcrumb-item">Modificar usuario</li>
      </ol>
    </nav>
</div>
<div class="card p-4">
	<div class="mb-3">
		<div class="container">
			<div class="col-lg-4 offset-lg-4">
			{$modificaruser}
		</div>
		</div>
	</div>
</div>


{include file="pie2.tpl"}