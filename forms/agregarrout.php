<?php

$agregarrout = new FormHandler('', '');

$agregarrout->textField('Dirección IP', 'ip', FH_STRING, '', 'placeholder="Dirección ip"');

$agregarrout->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$agregarrout->textField('Usuario RB', 'user_rb', FH_STRING);

$agregarrout->textField('Clave RB', 'clave_rb', FH_STRING);

$agregarrout->textField('API', 'api', FH_STRING);

$agregarrout->textField('WWW', 'www', FH_STRING);
$agregarrout->textField('Rango de alcance', 'rango', FH_STRING);
$zonas = array(
    ''             => '-- Select --',
    'zon1'         => 'Zona #01',
    'zon2'         => 'Zona #02',

);
$agregarrout-> selectField('Zona', 'zonas', $zonas, null, "form-select-sm", null);

$agregarrout->textField('Coordenadas', 'coordenadas');
$agregarrout->textField('Frecuencia', 'frecuencia');
$agregarrout->textField('Tipo de router', 'tipo');
$agregarrout->dateTextField('Fecha de ingreso', 'fecha', FH_STRING);

$agregarrout->submitButton('Agregar router', 'btn_continuar', 'btn-primary btn-sm mt-3');

$agregarrout = $agregarrout->flush(true);