<?php

$agregarcontr = new FormHandler('', '');

$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark Torres',
    'luis'         => 'Luis Hernandez',

);
$agregarcontr-> selectField('Cliente', 'clientes', $clientes, FH_STRING, "form-select-sm");

$planes = array(
    ''             => '-- Select --',
    'mega'         => 'Mega PLUS',
    'advan'        => 'Advanced',

);
$agregarcontr-> selectField('Plan', 'planes', $planes, FH_STRING, "form-select-sm");

$zonas = array(
    ''             => '-- Select --',
    'zon1'         => 'Zona #01',
    'zon2'         => 'Zona #02',

);
$agregarcontr-> selectField('Zona', 'zonas', $zonas, null, "form-select-sm", null);

$instalaciones = array(
    ''             => '-- Select --',
    'insta1'         => '1235',
    'insta2'         => '2589',

);
$agregarcontr-> selectField('Instalacion realizada', 'instalaciones', $instalaciones, null, "form-select-sm", null);

$personal = array(
    ''             => '-- Select --',
    'instaper1'         => 'Equipo 01',
    'instaper2'         => 'Equipo 02',

);
$agregarcontr-> selectField('Personal encargado de instalacion', 'personal', $personal, null, "form-select-sm", null);

$agregarcontr->textArea('Observaciones', 'observaciones', FH_STRING, '', '');

$agregarcontr->submitButton('Agregar contrato', 'btn_continuar', 'btn-primary btn-sm');

$agregarcontr = $agregarcontr->flush(true);