<?php

$agregarpag = new FormHandler('', '');

$agregarpag->textField('Nro de pago', 'id', FH_STRING);

$agregarpag->dateTextField('Fecha', 'fecha', FH_STRING);
$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark Torres',
    'luis'         => 'Luis Hernandez',

);
$agregarpag-> selectField('Cliente', 'clientes', $clientes, FH_STRING, "form-select-sm");

$agregarpag->textField('Referencia', 'referencia', FH_STRING);
$agregarpag->textField('Total', 'total', FH_STRING);
$plataformas = array(
    ''             => '-- Select --',
    'Banco'         => 'Banco',
    'Zelle'         => 'Zelle',

);
$agregarpag-> selectField('Formas de pago', 'frm_pago', $plataformas, FH_STRING, "form-select-sm");
$frm_pago = array(
    ''             => '-- Select --',
    'canc'         => 'Cancelar servicios',
    'ins'         => 'Instalaciones',

);
$agregarpag-> selectField('Tipo de pago', 'tipo_pago', $frm_pago, FH_STRING, "form-select-sm");

$agregarpag->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$agregarpag = $agregarpag->flush(true);