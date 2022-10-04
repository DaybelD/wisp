<?php

$agregarinstal = new FormHandler('frm_instalaciones_agregar', 'instalaciones_agregar_proc.php');

$agregarinstal-> textField('Numero', 'id');

$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark Torres',
    'luis'         => 'Luis Hernandez',

);
$agregarinstal-> selectField('Cliente', 'cliente_id', $clientes, FH_STRING, "form-select-sm");

$agregarinstal->dateTextField('Fecha de instalacion', 'fecha', FH_STRING);
$productos = array(
    ''             => '-- Select --',
    '01'         => '01',
    '02'         => '02',

);
$agregarinstal-> selectField('Productos', 'producto_id', $productos, FH_STRING, "form-select-sm", null);

$routers = array(
    ''             => '-- Select --',
    '01'         => '01',
    '02'         => '02',

);
$agregarinstal-> selectField('Routers', 'router_id', $routers, FH_STRING, "form-select-sm", null);

$personal = array(
    ''             => '-- Select --',
    'instaper1'         => 'Equipo 01',
    'instaper2'         => 'Equipo 02',

);
$agregarinstal-> selectField('Personal encargado de instalacion', 'personal_id', $personal, null, "form-select-sm", null);


$agregarinstal->submitButton('Agregar instalacion', 'btn_continuar', 'btn-primary btn-sm');

$agregarinstal = $agregarinstal->flush(true);
