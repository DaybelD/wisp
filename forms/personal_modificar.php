<?php

$modpers = new FormHandler('', '');
$modpers-> textField('Nombre de usuario', 'usuario');

$modpers-> textField('Clave', 'clave');
$modpers-> textField('Nombre', 'nombre');
$modpers-> textArea('Dirección', 'direccion');


$ciudades = array(
    ''             => '-- Select --',
    'val'           => 'Valera',
    'truji'          => 'trujillo',

);
$modpers-> selectField('Ciudades', 'ciudades', $ciudades, FH_STRING, "form-select-sm", 'city');

$modpers-> textField('E-mail', 'email');

$modpers-> textField('Teléfonos', 'telef');

$niveles = array(
    ''             => '-- Select --',
    'user'           => 'Usuario',
    'admin'          => 'Administrador',

);
$modpers-> selectField('Nivel de acceso', 'nivel', $niveles, FH_STRING, "form-select-sm", 'city');
$modpers->dateTextField('Fecha de ingreso', 'fecha', FH_STRING);
$modpers->submitButton('Agregar personal', 'btn_continuar', 'btn-primary btn-sm');

$modpers = $modpers->flush(true);