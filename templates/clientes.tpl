{include file="cab2.tpl" titulo="Clientes"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Clientes</h3>
  <a class="btn btn-outline-light" href="agregarcliente.php" role="button" title="Agregar contrato">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>

<div class="table-responsive">
<table class="table" id="clientes">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">DNI</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefóno</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
{foreach $d as $cli}
    <tr>
      <td>{$cli.nombre}</td>
      <td>{$cli.id}</td>
      <td>{$cli.email}</td>
      <td>{$cli.telefono}</td>
	  <td>{include file="acciones.tpl"}</td>
    </tr>
{/foreach}
    
  </tbody>
</table>
</div>

<script>
var tabla= document.querySelector("#clientes");
var dataTable = new DataTable(tabla);
</script>

<!-- /Contenido -->
{include file="pie2.tpl"}
