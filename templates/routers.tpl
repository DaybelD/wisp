{include file="cab2.tpl" titulo="Routers"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>ROUTERS</h3>
  <a class="btn btn-outline-light" href="routers_agregar.php" role="button" title="Agregar">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Routers</li>
      </ol>
    </nav>
</div>
<div class="table-responsive">
<table class="table" id="tabla">
  <thead>
    <tr>
      <th scope="col">Dirección IP</th>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario RB</th>
      <th scope="col">Rango de alcance</th>
      <th scope="col">Zona</th>
      <th scope="col">Acciones</th>
    </tr>
    <tr>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>
       <a class="btn btn-outline-dark btn-sm" href="routers_modificar.php" role="button" title="Modificar">
       <img src="images/pencil-square.svg" width="16" height="16">
       </a>
       <a class="btn btn-outline-dark btn-sm" href="deshabilitarfactura.php" role="button" title="Deshabilitar">
       <img src="images/x-circle.svg" width="16" height="16">
       </a>
      </td>
    </tr>
  </thead>
</table>
</td>
{include file="pie2.tpl"}