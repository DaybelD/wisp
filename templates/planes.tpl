{include file="cab2.tpl" titulo="Planes"}

<div class="d-flex flex-row justify-content-between text-white p-2 mb-3">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Planes</li>
      </ol>
    </nav>
  <a class="btn btn-outline-dark" href="planes_agregar.php" role="button" title="Agregar contrato">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
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
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
  </tbody>
</table>

{include file="pie2.tpl"}