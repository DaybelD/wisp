<?php

$agregarprov = new FormHandler('', '');

$agregarprov-> textField('RIF', 'rif');
$agregarprov-> textField('Nombre', 'nombre');
$agregarprov-> textField('E-mail', 'email');
$agregarprov-> textArea('Dirección', 'direccion');

$ciudades = array(
    ''             => '-- Select --',
    'val'           => 'Valera',
    'truji'          => 'trujillo',

);
$agregarprov-> selectField('Ciudades', 'ciudades', $ciudades, FH_STRING, "form-select-sm", 'city');

$agregarprov-> textField('Teléfonos', 'telef');

$contribuyente = array(
    ''             => '-- Select --',
    'si'           => 'Si',
    'no'          => 'No',

);
$agregarprov-> selectField('Contribuyente especial', 'contribuyente', $contribuyente, FH_STRING, "form-select-sm");
$agregarprov->dateTextField('Fecha de ingreso', 'fecha', FH_STRING);

$agregarprov->submitButton('Agregar proveedor', 'btn_continuar', 'btn-primary btn-sm mt-3');

$agregarprov = $agregarprov->flush(true);