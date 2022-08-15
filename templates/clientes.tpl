{include file="cab2.tpl" titulo="Clientes"}

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-outline-dark" href="principal.php" role="button" title="Agregar cliente">
    <img src="images/person-plus.svg" alt="Editar" width="16" height="16">
  </a>
</div>
<table class="table table-responsive">
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
      <td> {include file="acciones.tpl"}</td>
    </tr>
  </tbody>
</table>

<!-- /Contenido -->
{include file="pie2.tpl"}
