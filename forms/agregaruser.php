<?php
$agregaruser = new FormHandler('frm_usuario_agregar', 'usuarios_agregar_proc.php', 'autocomplete=nope');
$agregaruser->textField('Usuario', 'id', FH_STRING, NULL, 'placeholder="Usuario" autocomplete=nickname');
$agregaruser->passField('Clave', 'clave', FH_STRING, '', 'placeholder="Clave"', 'autocomplete=off');
$agregaruser->passField('Confirme la clave', 'confirmeclave', FH_STRING, null, 'placeholder="Repita la clave" autocomplete=off');
$agregaruser->checkPassword("clave", "confirmeclave");
$agregaruser->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');
$agregaruser->selectField('Nivel', 'nivel', $pdo->enum('usuarios', 'nivel'), null, 'form-select-sm', null);
$agregaruser->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');
$agregaruser = $agregaruser->flush(true);
