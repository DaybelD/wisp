<?php

$agregarproduc = new FormHandler('', '');

$agregarproduc->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');
$agregarproduc->textField('Tipo', 'tipo', FH_STRING, '', 'placeholder="Tipo de producto"');
$agregarproduc->textField('Código', 'codigo', FH_STRING, '', 'placeholder="Codigo del producto"');
$agregarproduc->textField('Marca', 'marca', FH_STRING, '', 'placeholder="Marca"');
$agregarproduc->textField('Modelo', 'modelo', FH_STRING, '', 'placeholder="Modelo"');
$agregarproduc->textArea('Descripción', 'descripcion', FH_STRING, '', 'placeholder="Descripción breve del producto"');
$agregarproduc->textField('Precio', 'precio');
$agregarproduc->submitButton('Agregar producto', 'btn_continuar', 'btn-primary btn-sm');

$agregarproduc = $agregarproduc->flush(true);