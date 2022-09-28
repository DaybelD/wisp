<?php

$cambiarclave = new FormHandler('frm_usuario_modificar', 'usuarios_cambioclave_proc.php');

$cambiarclave->textField('Usuario', 'id', FH_STRING, null, 'readonly');
$cambiarclave->passField('Clave actual', 'claveactual', FH_STRING, null, 'placeholder="Clave" required');
$cambiarclave->passField('Nueva clave', 'clave', FH_STRING, null, 'placeholder="Clave" required');
$cambiarclave->passField('Confirme la nueva clave', 'confirmeclave', FH_STRING, null, 'required');
$cambiarclave->checkPassword('clave', 'confirmeclave');
$cambiarclave->submitButton('Cambiar', 'btn_continuar', 'btn-primary btn-sm');

$cambiarclave->setValue('id', $id);

$cambiarclave= $cambiarclave->flush(true);