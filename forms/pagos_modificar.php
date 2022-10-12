<?php

$modpago = new FormHandler('', '');

$modpago->textField('Nro de pago', 'id', FH_STRING);

$modpago->dateTextField('Fecha', 'fecha', FH_STRING);
$clientes = array(
    ''             => '-- Select --',
    'mark'         => 'Mark Torres',
    'luis'         => 'Luis Hernandez',

);
$modpago-> selectField('Cliente', 'clientes', $clientes, FH_STRING, "form-select-sm");

$modpago->textField('Referencia', 'referencia', FH_STRING);
$modpago->textField('Total', 'total', FH_STRING);
$plataformas = array(
    ''             => '-- Select --',
    'Banco'         => 'Banco',
    'Zelle'         => 'Zelle',

);
$modpago-> selectField('Formas de pago', 'frm_pago', $plataformas, FH_STRING, "form-select-sm");
$frm_pago = array(
    ''             => '-- Select --',
    'canc'         => 'Cancelar servicios',
    'ins'         => 'Instalaciones',

);
$modpago-> selectField('Tipo de pago', 'tipo_pago', $frm_pago, FH_STRING, "form-select-sm");

$modpago->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$modpago = $modpago
->flush(true);