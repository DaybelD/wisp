{include file="cab2.tpl" titulo="Facturas"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Facturas</h3>
  <a class="btn btn-outline-light" href="agregarfactura.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>
<div class="table-responsive">
<table class="table">
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
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
    <tr>
      <td>02</td>
      <td>Pendiente</td>
      <td>Gerardo Perez</td>
      <td>Advanced</td>
      <td>12/04/2021</td>
      <td>...</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>   
  </tbody>
</table>
</div>
{include file="pie2.tpl"}