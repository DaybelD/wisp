{include file="cab2.tpl" titulo="Formas de pago"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>FORMAS DE PAGO</h3>
  <a class="btn btn-outline-light" href="formapagos_agregar.php" role="button" title="Agregar">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Formas de pago</li>
      </ol>
    </nav>
</div>
<div class="table-responsive">
<table class="table" id="tabla">
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
      <td>
        <a class="btn btn-outline-dark btn-sm" href="formapagos_modificar.php" role="button" title="Modificar cliente">
        <img src="images/pencil-square.svg" width="16" height="16">
        </a> 
      </td>
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