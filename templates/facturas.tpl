{include file="cab2.tpl" titulo="Facturas"}

<div class="d-flex flex-row justify-content-between text-white p-2 mb-3">
  <nav>
    <ol class="breadcrumb text-dark rounded">
      <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
      <li class="breadcrumb-item">Facturas</li>
    </ol>
  </nav>
  <a class="btn btn-outline-dark" href="facturas_agregar.php" role="button" title="Agregar">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>
<div class="table-responsive">
<table class="table" id="tabla">
  <thead>
    <tr>
      <th scope="col">Nro #</th>
      <th scope="col">Estatus</th>
      <th scope="col">Cliente</th>
      <th scope="col">Plan</th>
      <th scope="col">Fecha</th>
      <th scope="col">Total</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>01</td>
      <td>Cancelado</td>
      <td>Luis Blanco</td>
      <td>Mega</td>
      <td>25/03/2022</td>
      <td>...</td>
  	  <td>
       <a class="btn btn-outline-dark btn-sm" href="modificarusuario.php" role="button" title="Modificar">
       <img src="images/pencil-square.svg" width="16" height="16">
       </a>
       <a class="btn btn-outline-dark btn-sm" href="deshabilitarfactura.php" role="button" title="Deshabilitar">
      <img src="images/x-circle.svg" width="16" height="16">
      </a> 
      </td>
    </tr>
  </tbody>
</table>
</div>
{include file="pie2.tpl"}