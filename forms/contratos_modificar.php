<?php

$modcontr = new FormHandler('frm_contratos', 'contratos_agregar_proc.php');

$modcontr->textField('Nro. Contrato', 'id');
$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark',
    'luis'         => 'Luis Hernandez',

);
$modcontr-> selectField('Cliente', 'cliente_id', $clientes, FH_STRING, "form-select-sm");

$planes = array(
    ''             => '-- Select --',
    'mega'         => 'Mega PLUS',
    'advan'        => 'Advanced',

);
$modcontr-> selectField('Plan', 'plan_id', $planes, FH_STRING, "form-select-sm");


$instalaciones = array(
    ''             => '-- Select --',
    'insta1'         => '1235',
    'insta2'         => '2589',

);
$modcontr-> selectField('Instalacion realizada', 'instal_id', $instalaciones, null, "form-select-sm", null);

$personal = array(
    ''             => '-- Select --',
    'instaper1'         => 'Equipo 01',
    'instaper2'         => 'Equipo 02',

);
$modcontr-> selectField('Personal encargado de instalacion', 'personal_id', $personal, null, "form-select-sm", null);

$modcontr->dateTextField('Fecha de inicio del contrato', 'fecha', FH_STRING);
$zonas = array(
    ''             => '-- Select --',
    'zon1'         => 'Zona #01',
    'zon2'         => 'Zona #02',

);
$modcontr-> selectField('Zona', 'zona_id', $zonas, null, "form-select-sm", null);
$modcontr->textArea('Observaciones', 'observaciones', FH_STRING, '', '');

$modcontr->submitButton('Agregar contrato', 'btn_continuar', 'btn-primary btn-sm');

$modcontr = $modcontr->flush(true);