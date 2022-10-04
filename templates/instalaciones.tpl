{include file="cab2.tpl" titulo="Instalaciones"}
<div class="d-flex flex-row justify-content-between text-white p-2 mb-3">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Instalaciones</li>
      </ol>
    </nav>
  <a class="btn btn-outline-dark" href="instalaciones_agregar.php" role="button" title="Agregar usuario">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>

<div class="table-responsive">
<table class="table" id="tabla">
  <thead>
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Fecha</th>
      <th scope="col">Personal a cargo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  {foreach $i as $inst}
    <tr>
    	<td>{$inst.cliente_id}</td>
    	<td>{$inst.fecha}</td>
    	<td>{$inst.personal_id}</td>
    	<td>
        <a class="btn btn-outline-dark btn-sm" href="instalaciones_modificar.php?id={$user.id}" role="button" title="Modificar">
        <img src="images/pencil-square.svg" width="16" height="16">
        </a> 
        <a class="btn btn-outline-dark btn-sm" href="instalaciones_eliminar.php" role="button" title="Eliminar">
        <img src="images/x-circle.svg" width="16" height="16">
        </a>
      </td>
    </tr>
  {/foreach}
  </tbody>
</table>
</div>

{include file="pie2.tpl"}