{include file="cab2.tpl" titulo="Planes"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Servicios / Planes</h3>
  <a class="btn btn-outline-light" href="agregarplanes.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>
<div class="table-responsive">
<table class="table">
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
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Advanced</td>
      <td>12/04/2021</td>
      <td>...</td>
      <td>Zona #4</td>
      <td>...</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>   
     <tr>
      <th scope="row">3</th>
      <td>Mark</td>
      <td>Mega PLUS</td>
      <td>25/03/2022</td>
      <td>...</td>
      <td>Zona #1</td>
      <td>...</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Mark</td>
      <td>Mega PLUS</td>
      <td>25/03/2022</td>
      <td>...</td>
      <td>Zona #1</td>
      <td>...</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
  </tbody>
</table>

{include file="pie2.tpl"}