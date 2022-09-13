{include file="cab2.tpl" titulo="Agregar usuario"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Usuarios / Agregar usuario nuevo</h3>
</div>
<form class="card p-2">
	<div class="mb-3">
		<div class="container">
			{$agregaruser}
				<input type='button' value='Atras' onClick='history.go(-1);' class='btn btn-primary btn-sm'>
		</div>
	</div>
</form>


{include file="pie2.tpl"}