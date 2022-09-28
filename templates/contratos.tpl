{include file="cab2.tpl" titulo="Contratos"}
<div class="d-flex flex-row justify-content-between text-white p-2 mb-3">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Contratos</li>
      </ol>
    </nav>
  <a class="btn btn-outline-dark" href="contratos_agregar.php" role="button" title="Agregar contrato">
    <i class="bi bi-person-plus"></i> Agregar
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

{include file="pie2.tpl"}