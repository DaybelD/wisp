<?php

$agregarinstal = new FormHandler('', '');

$agregarinstal-> textField('Numero', 'id');

$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark Torres',
    'luis'         => 'Luis Hernandez',

);
$agregarinstal-> selectField('Cliente', 'clientes', $clientes, FH_STRING, "form-select-sm");

$productos = array(
    ''             => '-- Select --',
    '01'         => '01',
    '02'         => '02',

);
$agregarinstal-> selectField('Productos', 'productos', $productos, FH_STRING, "form-select-sm", null);

$routers = array(
    ''             => '-- Select --',
    '01'         => '01',
    '02'         => '02',

);
$agregarinstal-> selectField('Routers', 'routers', $routers, FH_STRING, "form-select-sm", null);

$personal = array(
    ''             => '-- Select --',
    'instaper1'         => 'Equipo 01',
    'instaper2'         => 'Equipo 02',

);
$agregarinstal-> selectField('Personal encargado de instalacion', 'personal', $personal, null, "form-select-sm", null);

$agregarinstal->dateTextField('Fecha de instalacion', 'fecha', FH_STRING);

$agregarinstal->submitButton('Agregar instalacion', 'btn_continuar', 'btn-primary btn-sm');

$agregarinstal = $agregarinstal->flush(true);
