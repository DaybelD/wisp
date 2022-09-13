{include file="cab2.tpl" titulo="Agregar usuario"}
<nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
		<li class="breadcrumb-item"><a href="usuarios.php">Usuarios</a></li>
		<li class="breadcrumb-item">Agregar nuevo usuario</li>
	</ol>
</nav>
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3> Usuarios / Agregar usuario nuevo</h3>
</div>
<div class="card p-2">
	<div class="m-3">
			{$agregaruser}
				<input type='button' value='Atras' onClick='history.go(-1);' class='btn btn-primary btn-sm'>
	</div>
</div>


{include file="pie2.tpl"}