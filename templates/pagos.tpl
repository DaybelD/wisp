{include file="cab2.tpl" titulo="Pagos"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Pagos</h3>
  <a class="btn btn-outline-light" href="agregarpago.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>

<div class="table-responsive">
<table class="table">
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
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Advanced</td>
      <td>12/04/2021</td>
      <td>Zona #4</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>   
     <tr>
      <th scope="row">3</th>
      <td>Luis</td>
      <td></td>
      <td></td>
      <td></td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
  </tbody>
</table>
</div>



{include file="pie2.tpl"}