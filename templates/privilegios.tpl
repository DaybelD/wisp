{include file="cab2.tpl" titulo="Ajustes"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>PRIVILEGIOS</h3>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Privilegios</li>
      </ol>
    </nav>
</div>
<div class="card p-2"> 
<form action="privilegios_proc.php" method="POST">
<div class="table-responsive">
<table class="table table-sm" id="tbl_privilegios">
	<thead class="text-center">
		<th>Página</th>
		{foreach $privilegios as $priv}
		<th>{$priv}</th>
		{/foreach}
	</thead>
	<tbody>
		{foreach $modulos as $mod}
		<tr>
			<td>{$mod}</td>
			{foreach $privilegios as $privi}
			<td class="text-center"><input class="form-check-input position-static" type="checkbox" name="{$mod}@{$privi}"></td>
			{/foreach}
		</tr>
		{/foreach}
	</tbody>
</table>
<div class="d-grid gap-2 col-2 mx-auto mt-4">
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>
</form>
</div>
{include file="pie2.tpl"}