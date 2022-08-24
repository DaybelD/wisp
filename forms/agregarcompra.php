<?php

$agregarcom = new FormHandler('', '');

$agregarcom->textField('Nro de compra', 'id', FH_STRING);

$agregarcom->dateTextField('Fecha', 'fecha', FH_STRING);

$agregarcom->textField('Referencia', 'referencia', FH_STRING);
$agregarcom->textField('Total', 'total', FH_STRING);
$plataformas = array(
    ''             => '-- Select --',
    'Banco'         => 'Banco',
    'Zelle'         => 'Zelle',

);
$agregarcom-> selectField('Formas de pago', 'frm_pago', $plataformas, FH_STRING, "form-select-sm");
$frm_pago = array(
    ''             => '-- Select --',
    'canc'         => 'Cancelar servicios',
    'ins'         => 'Instalaciones',

);
$agregarcom-> selectField('Tipo de compra', 'tipo_pago', $frm_pago, FH_STRING, "form-select-sm");

$agregarcom->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$agregarcom = $agregarcom->flush(true);