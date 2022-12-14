{include file="cab2.tpl" titulo="Usuarios"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>USUARIOS</h3>
  <a class="btn btn-outline-light" href="usuarios_agregar.php" role="button" title="Agregar usuario">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Usuarios</li>
      </ol>
    </nav>
</div>
<div class="table-responsive">
  <table class="table" id="tabla">
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
          <td>{$user.rol_id}</td>
          <td>{$user.estatus}</td>
          <td>
            <a class="btn btn-outline-dark btn-sm" href="usuarios_modificar.php?id={$user.id}" role="button" title="Modificar usuario">
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
