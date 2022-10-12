{include file="cab2.tpl" titulo="Gastos"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>GASTOS</h3>
  <a class="btn btn-outline-light" href="gastos_agregar.php" role="button" title="Agregar">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Gastos</li>
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
    <tr>
      <th scope="row">1236</th>
      <td>Mark</td>
      <td>Mega PLUS</td>
      <td>25/03/2022</td>
      <td>Zona #1</td>
  	  <td>
        <a class="btn btn-outline-dark btn-sm" href="gastos_modificar.php" role="button" title="Modificar cliente">
        <img src="images/pencil-square.svg" width="16" height="16">
        </a> 
      </td>
    </tr>
  </tbody>
</table>
</div>



{include file="pie2.tpl"}