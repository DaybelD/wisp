{include file="cab2.tpl" titulo="Usuarios"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-3">
  <h3>Usuarios</h3>
  <a class="btn btn-outline-light" href="agregarusuario.php" role="button" title="Agregar usuario">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>

<div class="table-responsive">
<table class="table" id="clientes">
  <thead>
    <tr>
      <th scope="col">Usuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nivel de usuario</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
{foreach $u as $user}
    <tr>
      <td>{$user.id}</td>
      <td>{$user.nombre}</td>
      <td>{$user.nivel}</td>
      <td>
        <a class="btn btn-outline-dark btn-sm" href="modificarusuario.php" role="button" title="Modificar usuario">
          <img src="images/pencil-square.svg" width="16" height="16">
        </a>
        <a class="btn btn-outline-dark btn-sm" href="cambiarclave.php" role="button" title="Cambiar clave">
          <img src="images/lock.svg" width="16" height="16">
        </a>
        <a class="btn btn-outline-dark btn-sm" href="deshabilitarusuario.php" role="button" title="Deshabilitar usuario">
          <img src="images/x-circle.svg" width="16" height="16">
        </a>
      </td>
    </tr>
{/foreach}
    
  </tbody>
</table>
</div>

<script>
  
  var tabla= document.querySelector("#clientes");

  var dataTable = new DataTable(tabla);

</script>

{include file="pie2.tpl"}
