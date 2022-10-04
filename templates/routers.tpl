{include file="cab2.tpl" titulo="Almacén"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Almacén / Lista de routers</h3>
  <a class="btn btn-outline-light" href="routers_agregar.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Dirección IP</th>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario RB</th>
      <th scope="col">Clave RB</th>
      <th scope="col">API</th>
      <th scope="col">WWW</th>
      <th scope="col">Rango de alcance</th>
      <th scope="col">Zona</th>
      <th scope="col">Frecuencia</th>
      <th scope="col">Coordenadas</th>
      <th scope="col">Tipo</th>
      <th scope="col">Acciones</th>
    </tr>
    <tr>
    	<td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>{include file="acciones.tpl"}</th>
    </tr>
  </thead>
</table>
</td>
{include file="pie2.tpl"}