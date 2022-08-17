{include file="cab2.tpl" titulo="Facturas"}


<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-outline-dark" href="agregarfactura.php" role="button" title="Agregar factura">
    <img src="images/plus-lg.svg" alt="Editar" width="16" height="16">
  </a>
</div>
<table class="table table-responsive">
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

{include file="pie2.tpl"}