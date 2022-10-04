{include file="cab2.tpl" titulo="Formas de pago"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Finanzas / Formas de pago</h3>
  <a class="btn btn-outline-light" href="formapagos_agregar.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>

<div class="table-responsive">
<table class="table" id="formapagos">
  <thead>
    <tr>
      <th scope="col">Forma de pago</th>
      <th scope="col">Moneda</th>
      <th scope="col">Plataforma</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  {foreach $c as $frmpag}
    <tr>
      <td>{$frmpag.nombre}</td>
      <td>{$frmpag.moneda_id}</td>
      <td>{$frmpag.plataforma}</td>
    <td>{include file="acciones.tpl"}</td>
    </tr>
{/foreach}
  </tbody>
</table>
</div>

<script>
  
  var tabla= document.querySelector("#formapagos");

  var dataTable = new DataTable(tabla);

</script>



{include file="pie2.tpl"}