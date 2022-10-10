{include file="cab2.tpl" titulo="Clientes"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>CLIENTES</h3>
  <a class="btn btn-outline-light" href="clientes_agregar.php" role="button" title="Agregar usuario">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item">Clientes</li>
      </ol>
    </nav>
</div>

<div class="table-responsive">
<table class="table" id="tabla">
  <thead>
    <tr>
      <th scope="col">CI</th>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefóno</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
{foreach $d as $cli}
    <tr>
      <td>{$cli.id}</td>
      <td>{$cli.nombre}</td>
      <td>{$cli.email}</td>
      <td>{$cli.telefono}</td>
	    <td>
        <a class="btn btn-outline-dark btn-sm" href="clientes_modificar.php?id={$cli.id}" role="button" title="Modificar cliente">
          <img src="images/pencil-square.svg" width="16" height="16">
        </a>
      </td>
    </tr>
{/foreach}
    
  </tbody>
</table>
</div>

{include file="pie2.tpl"}
