{include file="cab2.tpl" titulo="Agregar cliente"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-3">
  <h3>Clientes</h3>
  </a>
</div>
	<nav>
		<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="clientes.php" >Clientes</a></li>
				<li class="breadcrumb-item active">Modificar cliente</li>
			</ol>
		</nav>
<div class="card p-2">
	<div class="mb-3">
		<div class="container">
			<div class="col-lg-4 offset-lg-4">
			{$modcli}
			</div>
		</div>
	</div>
</div>


{include file="pie2.tpl"}