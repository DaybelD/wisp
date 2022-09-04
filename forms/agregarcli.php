<?php

$agregarcli = new FormHandler('', '');

$agregarcli->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$agregarcli->textField('Apellido', 'apellido', FH_STRING, '', 'placeholder="Apellido"');
$agregarcli->textField('DNI', 'dni', FH_STRING, '', 'placeholder="Documento de identidad"');
$agregarcli->textField('E-mail', 'email', FH_STRING, '', 'placeholder="Correo electrónico"');
$agregarcli->textArea('Dirección', 'direccion', FH_STRING, '', '');
$agregarcli->textArea('Dirección', 'direccion', FH_STRING, '', '');

$ciudades = $pdo->sql2options("SELECT id, nombre FROM ciudades ORDER BY nombre ASC");
$agregarcli->selectField('Ciudades', 'ciudades', $ciudades, FH_STRING, "form-select-sm", 'city');

$agregarcli->textField('Codigo postal', 'cod_postal', FH_STRING);
$agregarcli->textField('Télefono', 'telef1', FH_STRING);
$agregarcli->textField('Móvil', 'telef2', FH_STRING);

$nivel = [
	'' => '-- Select --',
	'user' => 'Usuario',
	'admin' => 'Administrador',

];
$agregarcli->selectField('Nivel', 'nivel', $nivel, null, "form-select-sm", null);
$agregarcli->dateTextField('Fecha de ingreso', 'fecha', FH_STRING);

$agregarcli->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$agregarcli = $agregarcli->flush(true);