{include file="cab2.tpl" titulo="Proveedores"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3>Proveedores</h3>
  <a class="btn btn-outline-light" href="proveedores_agregar.php" role="button" title="Agregar contrato">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Rif</th>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Dirección</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Telefónos</th>
      <th scope="col">Contribuyente especial</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>J-58963200</td>
      <td>Inversiones C.A.</td>
      <td>inversiones@gmail.com</td>
      <td>sector centro, calle 8</td>
      <td>Valera</td>
      <td>04127536985</td>
      <td>SI</td>
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>J-74125896</td>
      <td>Distribuidora Hola</td>
      <td>distribuidora@hotmail.com</td>
      <td>sector carvajal</td>
      <td>Carvajal</td>
      <td>04261598632</td>
      <td>NO</td>
     <td>{include file="acciones.tpl"}</td>
    </tr>    
    <tr>
      <th scope="row">3</th>
      <td>J-123879387</td>
      <td>Variedades Sebastian</td>
      <td>sebasvariedades@gmail.com</td>
      <td>...</td>
      <td>Valera</td>
      <td>04147852368</td>
      <td>NO</td>
     <td>{include file="acciones.tpl"}</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>J-6757657</td>
      <td>Larry S.A.</td>
      <td>carrillolarry@yahoo.com</td>
      <td>Calle 10</td>
      <td>...</td>
      <td>02712255663</td>
      <td>SI</td>
      <td>{include file="acciones.tpl"}</td>
    </tr>
  </tbody>
</table>
</div>
{include file="pie2.tpl"}