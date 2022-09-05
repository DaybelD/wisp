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
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nivel de usuario</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
{foreach $t as $user}
    <tr>
      <td>{$user.id}</td>
      <td>{$user.clave}</td>
      <td>{$user.nombre}</td>
      <td>{$user.nivel}</td>
	  <td>{include file="acciones.tpl"}</td>
    </tr>
{/foreach}
    
  </tbody>
</table>
</div>

<script>
  
  var tabla= document.querySelector("#clientes");

  var dataTable = new DataTable(tabla);

</script>

<!-- /Contenido -->
{include file="pie2.tpl"}
