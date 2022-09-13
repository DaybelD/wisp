<?php

$agregarfac = new FormHandler('', '');

$agregarfac-> textField('Numero', 'id');
$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark Torres',
    'luis'         => 'Luis Hernandez',

);
$agregarfac-> selectField('Cliente', 'clientes', $clientes, FH_STRING, "form-select-sm");
$productos = array(
    ''           => '-- Select --',
    '01'         => '01',
    '02'         => '02',

);
$agregarfac-> selectField('Productos', 'productos', $productos, FH_STRING, "form-select-sm", null);
$instalaciones = array(
    ''             => '-- Select --',
    'insta1'         => '1235',
    'insta2'         => '2589',

);
$agregarfac-> selectField('Instalacion realizada', 'instalaciones', $instalaciones, null, "form-select-sm", null);
$planes = array(
    ''             => '-- Select --',
    'mega'         => 'Mega PLUS',
    'advan'        => 'Advanced',

);
$agregarfac-> selectField('Plan', 'planes', $planes, FH_STRING, "form-select-sm");

$agregarfac->dateTextField('Fecha de facturación', 'fecha', FH_STRING);

$agregarfac-> textField('Total', 'total');

$agregarfac->submitButton('Agregar factura', 'btn_continuar', 'btn-primary btn-sm');

$agregarfac = $agregarfac->flush(true);