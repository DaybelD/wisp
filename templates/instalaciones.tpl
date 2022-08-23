{include file="cab2.tpl" titulo="Instalaciones"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Instalaciones</h3>
  <a class="btn btn-outline-light" href="agregarinstalaciones.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Estatus</th>
      <th scope="col">Cliente</th>
      <th scope="col">Fecha</th>
      <th scope="col">Personal a cargo</th>
      <th scope="col">Acciones</th>
    </tr>
    <tr>
    	<td>......</td>
    	<td>......</td>
    	<td>......</td>
    	<td>......</td>
    	<td>{include file="acciones.tpl"}</td>
    </tr>
  </thead>
</table>
</div>

{include file="pie2.tpl"}