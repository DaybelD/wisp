{include file="cab2.tpl" titulo="Compras"}

<div class="d-flex flex-row justify-content-between text-white p-2 mb-3">
  <nav>
    <ol class="breadcrumb text-dark rounded">
      <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
      <li class="breadcrumb-item">Compras</li>
    </ol>
  </nav>
  <a class="btn btn-outline-dark" href="agregarcompra.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
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
        <a class="btn btn-outline-dark btn-sm" href="modificarcompra.php" role="button" title="Modificar">
        <img src="images/pencil-square.svg" width="16" height="16">
        </a>
      </td>
    </tr>
  </tbody>
</table>
</div>

{include file="pie2.tpl"}