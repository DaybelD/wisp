{include file="cab2.tpl" titulo="Agregar cliente"}
<div class="d-flex flex-row justify-content-between text-white mb-1" style="background-color: #dce9f5">	
	<nav>
		<ol class="breadcrumb p-2 text-dark rounded">
				<li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
				<li class="breadcrumb-item"><a href="clientes.php">Clientes</a></li>
				<li class="breadcrumb-item">Agregar cliente</li>
			</ol>
		</nav>
	</div>
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