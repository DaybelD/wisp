{include file="cab2.tpl" titulo="Almacén"}

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-outline-dark" href="principal.php" role="button" title="Agregar producto">
    <img src="images/plus-lg.svg" alt="Editar" width="16" height="16">
  </a>
</div>

<table class="table caption-top">
<caption>Lista de productos</caption>
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