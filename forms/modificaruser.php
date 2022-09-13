<?php

$modificaruser = new FormHandler('', '');

$modificaruser->textField('Usuario', 'id', FH_STRING, '', 'placeholder="Usuario" disabled');

$modificaruser->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$nivel = [
	'' => '-- Select --',
	'user' => 'Usuario',
	'admin' => 'Administrador',

];
$modificaruser->selectField('Nivel', 'nivel', $nivel, null, 'form-select-sm', null);

$modificaruser->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$modificaruser = $modificaruser->flush(true);