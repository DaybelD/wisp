{include file="cab0.tpl"}
  <body class="text-center d-flex flex-column h-100">
    <main class="form-signin w-100 m-auto flex-shrink-0">
      <h1 class="h3 mb-3 fw-normal">Inicia sesion</h1>
      <img class="mb-4" src="./images/logo.svg" alt="Logo de 3ValTech" width="150">
    <div class="alert alert-warning alert-dismissible {if $showalert}{else}d-none{/if}" role="alert">
    Error en el ingreso de los datos... Por favor, inténtelo de nuevo.
    </div>
      {$frm_login}
    <br>
    </main>
{include file="footer.tpl"}
   </body>
</html>
