{include file="cab2.tpl" titulo="Almacén"}

<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2">
  <h3> Almacén / Lista de productos</h3>
  <a class="btn btn-outline-light" href="agregarproducto.php" role="button" title="Agregar contrato">
    <i class="bi bi-plus-lg"></i> Agregar
  </a>
</div>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      <th scope="col">Código</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Disponibles</th>
      <th scope="col">Acciones</th>
    </tr>
    <tr>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>......</td>
      <td>{include file="acciones.tpl"}</th>
    </tr>
  </thead>
</table>

{include file="pie2.tpl"}