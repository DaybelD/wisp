<?php
$agregaruser = new FormHandler('frm_usuario_agregar', 'usuarios_agregar_proc.php');

$agregaruser->textField('Usuario', 'id', FH_STRING, NULL, 'placeholder="Usuario" autocomplete=nickname required');
$agregaruser->passField('Clave', 'clave', FH_STRING, '', 'placeholder="Clave"', 'autocomplete=off required');
$agregaruser->passField('Confirme la clave', 'confirmeclave', FH_STRING, null, 'placeholder="Repita la clave" autocomplete=off required');
$agregaruser->checkPassword("clave", "confirmeclave");
$agregaruser->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre" required');
$agregaruser->selectField('Nivel', 'nivel', $pdo->enum('usuarios', 'nivel'), null, 'form-select-sm', null, null, null, 'required');
$agregaruser->selectField('Estatus', 'estatus', $pdo->enum('usuarios', 'estatus'), null, 'form-select-sm', null, null, null, 'required');
$agregaruser->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');
$agregaruser = $agregaruser->flush(true);
