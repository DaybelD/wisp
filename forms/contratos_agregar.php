<?php

$agregarcontr = new FormHandler('frm_contratos', 'contratos_agregar_proc.php');

$agregarcontr->textField('Nro. Contrato', 'id', FH_STRING, null, 'required');
$clientes = $pdo->sql2options("SELECT id, nombre FROM clientes ORDER BY nombre ASC");
$agregarcontr-> selectField('Cliente', 'cliente_id', $clientes, FH_STRING, "form-select-sm");

$planes = $pdo->sql2options("SELECT id, nombre FROM planes ORDER BY nombre ASC");
$agregarcontr-> selectField('Plan', 'plan_id', $planes, FH_STRING, "form-select-sm");


$instalaciones = array(
    ''             => '-- Select --',
    'insta1'         => '1235',
    'insta2'         => '2589',

);
$agregarcontr-> selectField('Instalacion realizada', 'instal_id', $instalaciones, null, "form-select-sm", null);

$personal = $pdo->sql2options("SELECT id, nombre FROM personal ORDER BY nombre ASC");
$agregarcontr-> selectField('Personal encargado de instalacion', 'personal_id', $personal, null, "form-select-sm", null);

$agregarcontr->dateTextField('Fecha de inicio del contrato', 'fecha', FH_STRING);

$zonas = $pdo->sql2options("SELECT id, nombre FROM zonas ORDER BY nombre ASC");
$agregarcontr->selectField('Zona', 'zona_id', $zonas, FH_STRING, "form-select-sm");

$agregarcontr->textArea('Observacion', 'observacion', FH_STRING, '', '');

$agregarcontr->submitButton('Agregar contrato', 'btn_continuar', 'btn-primary btn-sm mt-3');

$agregarcontr = $agregarcontr->flush(true);