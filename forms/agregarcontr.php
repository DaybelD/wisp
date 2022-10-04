<?php

$agregarcontr = new FormHandler('frm_contratos', 'contratos_agregar_proc.php');

$agregarcontr->textField('Nro. Contrato', 'id');
$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark',
    'luis'         => 'Luis Hernandez',

);
$agregarcontr-> selectField('Cliente', 'cliente_id', $clientes, FH_STRING, "form-select-sm");

$planes = array(
    ''             => '-- Select --',
    'mega'         => 'Mega PLUS',
    'advan'        => 'Advanced',

);
$agregarcontr-> selectField('Plan', 'plan_id', $planes, FH_STRING, "form-select-sm");


$instalaciones = array(
    ''             => '-- Select --',
    'insta1'         => '1235',
    'insta2'         => '2589',

);
$agregarcontr-> selectField('Instalacion realizada', 'instal_id', $instalaciones, null, "form-select-sm", null);

$personal = array(
    ''             => '-- Select --',
    'instaper1'         => 'Equipo 01',
    'instaper2'         => 'Equipo 02',

);
$agregarcontr-> selectField('Personal encargado de instalacion', 'personal_id', $personal, null, "form-select-sm", null);

$agregarcontr->dateTextField('Fecha de inicio del contrato', 'fecha', FH_STRING);
$zonas = array(
    ''             => '-- Select --',
    'zon1'         => 'Zona #01',
    'zon2'         => 'Zona #02',

);
$agregarcontr-> selectField('Zona', 'zona_id', $zonas, null, "form-select-sm", null);
$agregarcontr->textArea('Observaciones', 'observaciones', FH_STRING, '', '');

$agregarcontr->submitButton('Agregar contrato', 'btn_continuar', 'btn-primary btn-sm');

$agregarcontr = $agregarcontr->flush(true);