{include file="cab2.tpl" titulo="Instalaciones"}
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-outline-dark" href="principal.php" role="button" title="Agregar instalación">
    <img src="images/plus-lg.svg" alt="Editar" width="16" height="16">
  </a>
</div>
<table class="table table-responsive caption-top">
  <thead>
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Fecha</th>
      <th scope="col">Personal a cargo</th>
      <th scope="col">Productos</th>
      <th scope="col">Router</th>
      <th scope="col">Acciones</th>
    </tr>
    <tr>
    	<td>......</td>
    	<td>......</td>
    	<td>......</td>
    	<td>......</td>
    	<td>......</td>
    	<td>{include file="acciones.tpl"}</td>
    </tr>
  </thead>
</table>

{include file="pie2.tpl"}