<?php

$modinstal = new FormHandler('frm_instalaciones_agregar', 'instalaciones_agregar_proc.php');

$modinstal-> textField('Numero', 'id');

$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark Torres',
    'luis'         => 'Luis Hernandez',

);
$modinstal-> selectField('Cliente', 'cliente_id', $clientes, FH_STRING, "form-select-sm");

$modinstal->dateTextField('Fecha de instalacion', 'fecha', FH_STRING);
$productos = array(
    ''             => '-- Select --',
    '01'         => '01',
    '02'         => '02',

);
$modinstal-> selectField('Productos', 'producto_id', $productos, FH_STRING, "form-select-sm", null);

$routers = array(
    ''             => '-- Select --',
    '01'         => '01',
    '02'         => '02',

);
$modinstal-> selectField('Routers', 'router_id', $routers, FH_STRING, "form-select-sm", null);

$personal = array(
    ''             => '-- Select --',
    'instaper1'         => 'Equipo 01',
    'instaper2'         => 'Equipo 02',

);
$modinstal-> selectField('Personal encargado de instalacion', 'personal_id', $personal, null, "form-select-sm", null);


$modinstal->submitButton('Agregar instalacion', 'btn_continuar', 'btn-primary btn-sm mt-3');

$modinstal = $modinstal->flush(true);
