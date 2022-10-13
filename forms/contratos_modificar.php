<?php

$modcontr = new FormHandler('frm_contratos_mod', 'contratos_modificar_proc.php');

$modcontr->textField('Nro. Contrato', 'id', FH_STRING, '', 'placeholder="Usuario" readonly');

$clientes = $pdo->sql2options("SELECT id, nombre FROM clientes ORDER BY nombre ASC");
$modcontr-> selectField('Cliente', 'cliente_id', $clientes, FH_STRING, "form-select-sm");

$planes = $pdo->sql2options("SELECT id, nombre FROM planes ORDER BY nombre ASC");
$modcontr-> selectField('Plan', 'plan_id', $planes, FH_STRING, "form-select-sm");


$instalaciones = array(
    ''             => '-- Select --',
    'insta1'         => '1235',
    'insta2'         => '2589',

);
$modcontr-> selectField('Instalacion realizada', 'instal_id', $instalaciones, null, "form-select-sm", null);

$personal = $pdo->sql2options("SELECT id, nombre FROM personal ORDER BY nombre ASC");
$modcontr-> selectField('Personal encargado de instalacion', 'personal_id', $personal, null, "form-select-sm", null);

$modcontr->dateTextField('Fecha de inicio del contrato', 'fecha', FH_STRING);

$zonas = $pdo->sql2options("SELECT id, nombre FROM zonas ORDER BY nombre ASC");
$modcontr-> selectField('Zona', 'zona_id', $zonas, null, "form-select-sm", null);

$modcontr->textArea('Observaciones', 'observacion', FH_STRING, '', '');

$modcontr->submitButton('Modificar contrato', 'btn_continuar', 'btn-primary btn-sm mt-3');

$datos = $pdo->sql2row('SELECT cliente_id, plan_id, instal_id, personal_id, fecha, zona_id, observacion from contratos where id = ?', [$id], ['STR']);
$modcontr->setValue('id', $id);
$modcontr->setValue('cliente_id', $datos['cliente_id']);
$modcontr->setValue('plan_id', $datos['plan_id']);
$modcontr->setValue('instal_id', $datos['instal_id']);
$modcontr->setValue('personal_id', $datos['personal_id']);
$modcontr->setValue('fecha', $datos['fecha']);
$modcontr->setValue('zona_id', $datos['zona_id']);
$modcontr->setValue('observacion', $datos['observacion']);

$modcontr = $modcontr->flush(true);