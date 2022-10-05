{include file="cab2.tpl" titulo="Principal"}
<div class="card p-4">
      <h1>Bienvenido al sistema - {$smarty.session.usuario.nombre}</h1><br>


      <div class="alert alert-primary" role="alert">
        Clientes activos <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info">5
      </div>
</div>
     

{include file="pie2.tpl"}
