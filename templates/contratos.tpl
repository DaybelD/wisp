{include file="cab2.tpl" titulo="Contratos"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>CONTRATOS</h3>
  <a class="btn btn-outline-light" href="contratos_agregar.php" role="button" title="Agregar usuario">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Contratos</li>
      </ol>
    </nav>
</div>
<div class="table-responsive">
<table class="table" id="tabla">
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
  	  <td>
          <a class="btn btn-outline-dark btn-sm" href="contratos_modificar.php?id={$user.id}" role="button" title="Modificar cliente">
          <img src="images/pencil-square.svg" width="16" height="16">
        </a>
      </td>
    </tr>
    {/foreach}
  </tbody>
</table>
</div>

{include file="pie2.tpl"}