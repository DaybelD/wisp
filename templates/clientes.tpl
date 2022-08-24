{include file="cab2.tpl" titulo="Clientes"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Clientes</h3>
  <a class="btn btn-outline-light" href="agregarcliente.php" role="button" title="Agregar contrato">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>

<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nombre</th>
      <th scope="col">DNI</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefóno</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark Gonzales</td>
      <td>V-12365258</td>
      <td>markgonza@gmail.com</td>
      <td>04128523698</td>
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>V- 15745852</td>
      <td>jperez@hotmail.com</td>
      <td>04261598632</td>
     <td> {include file="acciones.tpl"} </td>
    </tr>    
    <tr>
      <th scope="row">3</th>
      <td>Sebastian</td>
      <td>V- 26741357</td>
      <td>...</td>
      <td>04147852368</td>
     <td> {include file="acciones.tpl"} </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Larry</td>
      <td>V- 30123654</td>
      <td>carrillolarry@yahoo.com</td>
      <td>...</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
  </tbody>
</table>
</div>

<!-- /Contenido -->
{include file="pie2.tpl"}
