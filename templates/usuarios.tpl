{include file="cab2.tpl" titulo="Usuarios"}
<div class="d-flex flex-row justify-content-between text-white p-2 mb-3">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Usuarios</li>
      </ol>
    </nav>
  <a class="btn btn-outline-dark" href="usuarios_agregar.php" role="button" title="Agregar usuario">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<!-- ARNOLDO -->
<div class="table-responsive">
<table class="table" id="usuarios">
  <thead>
    <tr>
      <th scope="col">Usuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nivel de usuario</th>
      <th scope="col">Estatus del usuario</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
{foreach $u as $user}
    <tr>
      <td>{$user.id}</td>
      <td>{$user.nombre}</td>
      <td>{$user.nivel}</td>
      <td>{$user.estatus}</td>
      <td>
        <a class="btn btn-outline-dark btn-sm" href="modificarusuario.php?id={$user.id}" role="button" title="Modificar usuario">
          <img src="images/pencil-square.svg" width="16" height="16">
        </a>
        <a class="btn btn-outline-dark btn-sm" href="cambiarclave.php?id={$user.id}" role="button" title="Cambiar clave">
          <img src="images/lock.svg" width="16" height="16">
        </a>
      </td>
    </tr>
{/foreach}
    
  </tbody>
</table>
</div>

{include file="pie2.tpl"}
