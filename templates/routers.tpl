{include file="cab2.tpl" titulo="Almacén"}

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-outline-dark" href="principal.php" role="button" title="Agregar router">
    <img src="images/plus-lg.svg" alt="Editar" width="16" height="16">
  </a>
</div>

<table class="table table-responsive caption-top">
<caption>Lista de routers</caption>
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

{include file="pie2.tpl"}