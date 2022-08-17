{include file="cab2.tpl" titulo="Contratos"}

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-outline-dark" href="agregarcontrato.php" role="button" title="Agregar contrato">
    <img src="images/plus-lg.svg" alt="Editar" width="16" height="16">
  </a>
</div>
<table class="table table-responsive">
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
      <td>Mark</td>
      <td>Mega PLUS</td>
      <td>25/03/2022</td>
      <td>Zona #1</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Mark</td>
      <td>Mega PLUS</td>
      <td>25/03/2022</td>
      <td>Zona #1</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
  </tbody>
</table>



{include file="pie2.tpl"}