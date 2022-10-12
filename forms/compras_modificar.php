<?php

$modcompra = new FormHandler('', '');

$modcompra->textField('Nro de compra', 'id', FH_STRING);

$modcompra->dateTextField('Fecha', 'fecha', FH_STRING);

$modcompra->textField('Referencia', 'referencia', FH_STRING);
$modcompra->textField('Total', 'total', FH_STRING);
$plataformas = array(
    ''             => '-- Select --',
    'Banco'         => 'Banco',
    'Zelle'         => 'Zelle',

);
$modcompra-> selectField('Formas de pago', 'frm_pago', $plataformas, FH_STRING, "form-select-sm");
$frm_pago = array(
    ''             => '-- Select --',
    'canc'         => 'Cancelar servicios',
    'ins'         => 'Instalaciones',

);
$modcompra-> selectField('Tipo de compra', 'tipo_pago', $frm_pago, FH_STRING, "form-select-sm");

$modcompra->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm mt-3');

$modcompra = $modcompra->flush(true);