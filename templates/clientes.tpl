{include file="cab2.tpl" titulo="Clientes"}
<div class="d-flex flex-row justify-content-between text-white p-2 mb-3">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Usuarios</li>
      </ol>
    </nav>
  <a class="btn btn-outline-dark" href="agregarusuario.php" role="button" title="Agregar usuario">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>

<div class="table-responsive">
<table class="table" id="clientes">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">DNI</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefóno</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
{foreach $d as $cli}
    <tr>
      <td>{$cli.nombre}</td>
      <td>{$cli.dni}</td>
      <td>{$cli.email}</td>
      <td>{$cli.telefono}</td>
	    <td>
        <a class="btn btn-outline-dark btn-sm" href="modificarusuario.php?id={$user.id}" role="button" title="Modificar usuario">
          <img src="images/pencil-square.svg" width="16" height="16">
        </a>
      </td>
    </tr>
{/foreach}
    
  </tbody>
</table>
</div>

{include file="pie2.tpl"}
