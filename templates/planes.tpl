{include file="cab2.tpl" titulo="Planes"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>PLANES</h3>
  <a class="btn btn-outline-light" href="planes_agregar.php" role="button" title="Agregar usuario">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Planes</li>
      </ol>
    </nav>
</div>
<div class="table-responsive">
<table class="table" id="tabla">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Subida</th>
      <th scope="col">Bajada</th>
      <th scope="col">Descripción</th>
      <th scope="col">Recargo por mora</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mega PLUS</td>
      <td>20$</td>
      <td>1</td>
      <td>1</td>
      <td>Velocidad estable</td>
      <td>5$</td>
  	  <td>
        <a class="btn btn-outline-dark btn-sm" href="planes_modificar.php" role="button" title="Modificar usuario">
        <img src="images/pencil-square.svg" width="16" height="16">
        </a>
        <a class="btn btn-outline-dark btn-sm" href="#" role="button" title="Deshabilitar usuario">
        <img src="images/x-circle.svg" width="16" height="16">
        </a>
      </td>
    </tr>
  </tbody>
</table>

{include file="pie2.tpl"}