<?php

$modgasto = new FormHandler('', '');

$modgasto->textField('Nro de gasto', 'id', FH_STRING);

$modgasto->dateTextField('Fecha', 'fecha', FH_STRING);

$modgasto->textField('Referencia', 'referencia', FH_STRING);
$modgasto->textField('Total', 'total', FH_STRING);
$plataformas = array(
    ''             => '-- Select --',
    'Banco'         => 'Banco',
    'Zelle'         => 'Zelle',

);
$modgasto-> selectField('Formas de pago', 'frm_pago', $plataformas, FH_STRING, "form-select-sm");
$frm_pago = array(
    ''             => '-- Select --',
    'canc'         => 'Cancelar servicios',
    'ins'         => 'Instalaciones',

);
$modgasto-> selectField('Tipo de gasto', 'tipo_pago', $frm_pago, FH_STRING, "form-select-sm");

$modgasto->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$modgasto = $modgasto->flush(true);