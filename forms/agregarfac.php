<?php

$agregarfac = new FormHandler('', '');

$agregarfac->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$agregarfac->textField('Apellido', 'apellido', FH_STRING, '', 'placeholder="Apellido"');
$agregarfac->textField('DNI', 'dni', FH_STRING, '', 'placeholder="Documento de identidad"');
$agregarfac->textField('E-mail', 'email', FH_STRING, '', 'placeholder="Correo electrónico"');
$agregarfac->textArea('Dirección', 'direccion', FH_STRING, '', '');
$agregarfac->textArea('Dirección', 'direccion', FH_STRING, '', '');

$ciudades = array(
    ''             => '-- Select --',
    'val'           => 'Valera',
    'truji'          => 'trujillo',

);
$agregarfac-> selectField('Ciudades', 'ciudades', $ciudades, FH_STRING, "form-select-sm", 'city');

$agregarfac->textField('Codigo postal', 'cod_postal', FH_STRING);
$agregarfac->textField('Télefono', 'telef1', FH_STRING);
$agregarfac->textField('Móvil', 'telef2', FH_STRING);

$nivel = array(
    ''             => '-- Select --',
    'user'           => 'Usuario',
    'admin'          => 'Administrador',

);
$agregarfac-> selectField('Nivel', 'nivel', $nivel, null, "form-select-sm", null);

$agregarfac->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$agregarfac = $agregarfac->flush(true);