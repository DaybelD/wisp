{include file="cab2.tpl" titulo="Personal"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Personal</h3>
  <a class="btn btn-outline-light" href="agregarpersonal.php" role="button" title="Agregar contrato">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Usuario</th>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Dirección</th>
      <th scope="col">Ciudad</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefónos</th>
      <th scope="col">Nivel de acceso</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>admin</td>
      <td>admin</td>
      <td>Luis Perez</td>
      <td>sector centro, calle 8</td>
      <td>Valera</td>
      <td>luisperez@gmail.com</td>
      <td>04265869214</td>
      <td>Administrador</td>
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>admin</td>
      <td>admin</td>
      <td>Luis Perez</td>
      <td>sector centro, calle 8</td>
      <td>Valera</td>
      <td>luisperez@gmail.com</td>
      <td>04265869214</td>
      <td>Administrador</td>
  	  <td>{include file="acciones.tpl"}</td>
    </tr>  
    <tr>
      <th scope="row">1</th>
      <td>user06</td>
      <td>85236</td>
      <td>Jose Blanco</td>
      <td>sector centro, calle 8</td>
      <td>Valera</td>
      <td>blancojose@gmail.com</td>
      <td>04265869214</td>
      <td>Usuario</td>
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>user01</td>
      <td>12345</td>
      <td>Luis Godoy</td>
      <td>sector centro, calle 8</td>
      <td>Valera</td>
      <td>luisperez25@gmail.com</td>
      <td>04265869214</td>
      <td>Usuario</td>
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
  </tbody>
</table>
</div>

{include file="pie2.tpl"}