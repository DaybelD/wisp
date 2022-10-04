<?php

$agregarcli = new FormHandler('frm_clientes_agregar', 'clientes_agregar_proc.php');

$agregarcli->textField('C.I.', 'id', FH_STRING, '', 'placeholder="Documento de identidad"');
$agregarcli->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$agregarcli->textField('Apellido', 'apellido', FH_STRING, '', 'placeholder="Apellido"');
$agregarcli->textField('E-mail', 'email', FH_STRING, '', 'placeholder="Correo electrónico"');
$agregarcli->textArea('Dirección', 'direccion', FH_STRING, '', '');

$ciudades = $pdo->sql2options("SELECT id, nombre FROM ciudades ORDER BY nombre ASC");
$agregarcli->selectField('Ciudades', 'id_ciudad', $ciudades, FH_STRING, "form-select-sm", 'city');

$agregarcli->textField('Codigo postal', 'postal', FH_STRING);
$agregarcli->textField('Télefono', 'telef1', FH_STRING);
$agregarcli->textField('Móvil', 'telef2', FH_STRING);

$agregarcli->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$agregarcli = $agregarcli->flush(true);