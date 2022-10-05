{include file="cab2.tpl" titulo="Ajustes"}
<nav>
	<ol class="breadcrumb p-2 text-dark rounded">
		<li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
		<li class="breadcrumb-item">Privilegios</li>
	</ol>
</nav>
<form action="privilegios_proc.php" method="POST">
<table class="table table-sm">
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
<button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

{include file="pie2.tpl"}