<?php

$agregarpers = new FormHandler('', '');

$agregarpers-> textField('Nombre de usuario', 'usuario');

$agregarpers-> textField('Clave', 'clave');
$agregarpers-> textField('Nombre', 'nombre');
$agregarpers-> textArea('Dirección', 'direccion');


$ciudades = array(
    ''             => '-- Select --',
    'val'           => 'Valera',
    'truji'          => 'trujillo',

);
$agregarpers-> selectField('Ciudades', 'ciudades', $ciudades, FH_STRING, "form-select-sm", 'city');

$agregarpers-> textField('E-mail', 'email');

$agregarpers-> textField('Teléfonos', 'telef');

$niveles = array(
    ''             => '-- Select --',
    'user'           => 'Usuario',
    'admin'          => 'Administrador',

);
$agregarpers-> selectField('Nivel de acceso', 'nivel', $niveles, FH_STRING, "form-select-sm", 'city');
$agregarpers->dateTextField('Fecha de ingreso', 'fecha', FH_STRING);
$agregarpers->submitButton('Agregar personal', 'btn_continuar', 'btn-primary btn-sm mt-3');

$agregarpers = $agregarpers->flush(true);