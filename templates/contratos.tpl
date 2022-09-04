{include file="cab2.tpl" titulo="Contratos"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Contratos</h3>
  <a class="btn btn-outline-light" href="agregarcontrato.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>

<div class="table-responsive">
<table class="table" id="contratos">
  <thead>
    <tr>
      <th scope="col">Nro.</th>
      <th scope="col">Cliente</th>
      <th scope="col">Plan</th>
      <th scope="col">Fecha instalación</th>
      <th scope="col">Zona</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  {foreach $e as $contr}
    <tr>
      <td>{$contr.id}</td>
      <td>{$contr.cliente_id}</td>
      <td>{$contr.plan_id}</td>
      <td>{$contr.fecha}</td>
      <td>{$contr.zona_id}</td>
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
</div>

<script>
  
  var tabla= document.querySelector("#contratos");

  var dataTable = new DataTable(tabla);

</script>



{include file="pie2.tpl"}