<?php

$modprov = new FormHandler('', '');
$modprov-> textField('RIF', 'rif');
$modprov-> textField('Nombre', 'nombre');
$modprov-> textField('E-mail', 'email');
$modprov-> textArea('Dirección', 'direccion');

$ciudades = array(
    ''             => '-- Select --',
    'val'           => 'Valera',
    'truji'          => 'trujillo',

);
$modprov-> selectField('Ciudades', 'ciudades', $ciudades, FH_STRING, "form-select-sm", 'city');

$modprov-> textField('Teléfonos', 'telef');

$contribuyente = array(
    ''             => '-- Select --',
    'si'           => 'Si',
    'no'          => 'No',

);
$modprov-> selectField('Contribuyente especial', 'contribuyente', $contribuyente, FH_STRING, "form-select-sm");
$modprov->dateTextField('Fecha de ingreso', 'fecha', FH_STRING);

$modprov->submitButton('Agregar proveedor', 'btn_continuar', 'btn-primary btn-sm mt-3');

$modprov = $modprov->flush(true);