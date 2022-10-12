<?php

$modcli = new FormHandler('frm_clientes_modificar', 'clientes_modificar_proc.php');

$modcli->textField('Cliente', 'id', FH_STRING, '', 'readonly');

$modcli->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$modcli->textField('Apellido', 'apellido', FH_STRING, '', 'placeholder="Apellido"');
$modcli->textField('E-mail', 'email', FH_STRING, '', 'placeholder="Correo electrónico"');
$modcli->textArea('Dirección', 'direccion', FH_STRING, '', '');

$ciudades = $pdo->sql2options("SELECT id, nombre FROM ciudades ORDER BY nombre ASC");
$modcli->selectField('Ciudades', 'ciudad_id', $ciudades, FH_STRING, "form-select-sm", 'city');

$modcli->textField('Codigo postal', 'postal', FH_STRING);
$modcli->textField('Télefono', 'telef1', FH_STRING);
$modcli->textField('Móvil', 'telef2', FH_STRING);

$modcli->submitButton('Modificar', 'btn_continuar', 'btn-primary btn-sm mt-3');

$datos = $pdo->sql2row('SELECT nombre, apellido, email, direccion, ciudad_id, postal, telef1, telef2 from clientes where id = ?', [$id], ['STR']);
$modcli->setValue('id', $id);
$modcli->setValue('nombre', $datos['nombre']);
$modcli->setValue('apellido', $datos['apellido']);
$modcli->setValue('email', $datos['email']);
$modcli->setValue('direccion', $datos['direccion']);
$modcli->setValue('ciudad_id', $datos['ciudad_id']);
$modcli->setValue('postal', $datos['postal']);
$modcli->setValue('telef1', $datos['telef1']);
$modcli->setValue('telef2', $datos['telef2']);


$modcli = $modcli->flush(true);