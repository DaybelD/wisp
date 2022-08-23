{include file="cab2.tpl" titulo="Formas de pago"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Formas de pago</h3>
  <a class="btn btn-outline-light" href="agregarformapago.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>

<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Forma de pago</th>
      <th scope="col">Moneda</th>
      <th scope="col">Plataforma</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1236</th>
      <td>Mark</td>
      <td>Zona #1</td>
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Advanced</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>   
     <tr>
      <th scope="row">3</th>
      <td>Mark</td>
      <td>Mega PLUS</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Mark</td>
      <td>Mega PLUS</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
  </tbody>
</table>
</div>



{include file="pie2.tpl"}