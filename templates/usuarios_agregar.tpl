{include file="cab2.tpl" titulo="Agregar usuario"}
<div class="d-flex flex-row justify-content-between bg-secondary text-white p-2 mb-0">
  <h3>Agregar usuario</h3>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="usuarios.php">Usuarios</a></li>
        <li class="breadcrumb-item">Agregar nuevo usuario</li>
      </ol>
    </nav>
</div>
<div class="d-flex flex-row justify-content-between text-white ps-2">
    <nav>
    <ol class="breadcrumb text-dark rounded">
        <li class="breadcrumb-item"><a href="principal.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="usuarios.php">Usuarios</a></li>
        <li class="breadcrumb-item">Agregar nuevo plan</li>
      </ol>
    </nav>
</div>
<div class="card text-bg-primary mb-3 p-4">
	<div class="col-lg-4 offset-lg-4">
  {$agregaruser}
</div>
  </div>
</div>


{include file="pie2.tpl"}