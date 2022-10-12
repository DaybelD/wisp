<?php

$modfrmpago = new FormHandler('', '');

$modfrmpago->textField('Nombre', 'nombre', FH_STRING, '');

$modfrmpago->textField('Moneda', 'moneda', FH_STRING, '');

$modfrmpago->textField('Plataforma', 'plataforma', FH_STRING, '', '');

$modfrmpago->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$modfrmpago = $modfrmpago->flush(true);