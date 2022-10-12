<?php

$agregargas = new FormHandler('', '');

$agregargas->textField('Nro de gasto', 'id', FH_STRING);

$agregargas->dateTextField('Fecha', 'fecha', FH_STRING);

$agregargas->textField('Referencia', 'referencia', FH_STRING);
$agregargas->textField('Total', 'total', FH_STRING);
$plataformas = array(
    ''             => '-- Select --',
    'Banco'         => 'Banco',
    'Zelle'         => 'Zelle',

);
$agregargas-> selectField('Formas de pago', 'frm_pago', $plataformas, FH_STRING, "form-select-sm");
$frm_pago = array(
    ''             => '-- Select --',
    'canc'         => 'Cancelar servicios',
    'ins'         => 'Instalaciones',

);
$agregargas-> selectField('Tipo de gasto', 'tipo_pago', $frm_pago, FH_STRING, "form-select-sm");

$agregargas->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm mt-3');

$agregargas = $agregargas->flush(true);