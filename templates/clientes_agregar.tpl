{include file="cab2.tpl" titulo="Agregar cliente"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-3">
  <h3>Personal</h3>
  <a class="btn btn-outline-light" href="personal_agregar.php" role="button" title="Agregar personal">
  <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
	<nav>
		<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="clientes.php" >Clientes</a></li>
				<li class="breadcrumb-item active">Agregar cliente</li>
			</ol>
		</nav>
<div class="card p-2">
	<div class="mb-3">
		<div class="container">
			<div class="col-lg-4 offset-lg-4">
			{$agregarcli}
			</div>
		</div>
	</div>
</div>


{include file="pie2.tpl"}