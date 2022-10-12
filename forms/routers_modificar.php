<?php

$modrout = new FormHandler('', '');

$modrout->textField('Dirección IP', 'ip', FH_STRING, '', 'placeholder="Dirección ip"');

$modrout->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$modrout->textField('Usuario RB', 'user_rb', FH_STRING);

$modrout->textField('Clave RB', 'clave_rb', FH_STRING);

$modrout->textField('API', 'api', FH_STRING);

$modrout->textField('WWW', 'www', FH_STRING);
$modrout->textField('Rango de alcance', 'rango', FH_STRING);
$zonas = array(
    ''             => '-- Select --',
    'zon1'         => 'Zona #01',
    'zon2'         => 'Zona #02',

);
$modrout-> selectField('Zona', 'zonas', $zonas, null, "form-select-sm", null);

$modrout->textField('Coordenadas', 'coordenadas');
$modrout->textField('Frecuencia', 'frecuencia');
$modrout->textField('Tipo de router', 'tipo');
$modrout->dateTextField('Fecha de ingreso', 'fecha', FH_STRING);

$modrout->submitButton('Agregar router', 'btn_continuar', 'btn-primary btn-sm');

$modrout = $modrout->flush(true);