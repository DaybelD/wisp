<?php

$agregaruser = new FormHandler('', '');

$agregaruser->textField('Usuario', 'id', FH_STRING, '', 'placeholder="Usuario"');

$agregaruser->passField('Clave', 'clave', FH_STRING, '', 'placeholder="Clave"');

$agregaruser->passField('Confirme la clave', 'confirmeclave', FH_STRING);

$agregaruser->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$nivel = [
	'' => '-- Select --',
	'user' => 'Usuario',
	'admin' => 'Administrador',

];
$agregaruser->selectField('Nivel', 'nivel', $nivel, null, 'form-select-sm', null);

$agregaruser->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$agregaruser = $agregaruser->flush(true);