<?php

$modfac = new FormHandler('', '');

$modfac-> textField('Numero', 'id');
$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark Torres',
    'luis'         => 'Luis Hernandez',

);
$modfac-> selectField('Cliente', 'clientes', $clientes, FH_STRING, "form-select-sm");
$productos = array(
    ''           => '-- Select --',
    '01'         => '01',
    '02'         => '02',

);
$modfac-> selectField('Productos', 'productos', $productos, FH_STRING, "form-select-sm", null);
$instalaciones = array(
    ''             => '-- Select --',
    'insta1'         => '1235',
    'insta2'         => '2589',

);
$modfac-> selectField('Instalacion realizada', 'instalaciones', $instalaciones, null, "form-select-sm", null);
$planes = array(
    ''             => '-- Select --',
    'mega'         => 'Mega PLUS',
    'advan'        => 'Advanced',

);
$modfac-> selectField('Plan', 'planes', $planes, FH_STRING, "form-select-sm");

$modfac->dateTextField('Fecha de facturación', 'fecha', FH_STRING);

$modfac-> textField('Total', 'total');

$modfac->submitButton('Agregar factura', 'btn_continuar', 'btn-primary btn-sm mt-3');

$modfac = $modfac->flush(true);