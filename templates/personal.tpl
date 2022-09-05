{include file="cab2.tpl" titulo="Personal"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-3">
  <h3>Personal</h3>
  <a class="btn btn-outline-light" href="agregarpersonal.php" role="button" title="Agregar personal">
    <i class="bi bi-person-plus"></i> Agregar
  </a>
</div>
<div class="table-responsive">
<table class="table" id="personal">
  <thead>
    <tr>
      <th scope="col">Usuario</th>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefónos</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
   {foreach $e as $pers}
    <tr>
      <td>{$pers.id}</td>
      <td>{$pers.clave}</td>
      <td>{$pers.nombre}</td>
      <td>{$pers.email}</td>
      <td>{$pers.telefono}</td>
  	  <td>{include file="acciones.tpl"}</td>
    </tr>
  {/foreach}
  </tbody>
</table>
</div>

<script>
  
  var tabla= document.querySelector("#personal");

  var dataTable = new DataTable(tabla);

</script>

{include file="pie2.tpl"}