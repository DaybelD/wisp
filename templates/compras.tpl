{include file="cab2.tpl" titulo="Compras"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>COMPRAS</h3>
  <a class="btn btn-outline-light" href="compras_agregar.php" role="button" title="Agregar usuario">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Compras</li>
      </ol>
    </nav>
</div>
<div class="table-responsive">
<table class="table" id="tabla">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Referencia</th>
      <th scope="col">Total</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1236</th>
      <td>25/03/2022</td>
      <td>Mega PLUS</td>
      <td>236</td>
      <td>Zona #1</td>
  	  <td>
        <a class="btn btn-outline-dark btn-sm" href="compras_modificar.php" role="button" title="Modificar">
        <img src="images/pencil-square.svg" width="16" height="16">
        </a>
      </td>
    </tr>
  </tbody>
</table>
</div>

{include file="pie2.tpl"}