<?php

$modproduc = new FormHandler('', '');

$modproduc->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');
$modproduc->textField('Tipo', 'tipo', FH_STRING, '', 'placeholder="Tipo de producto"');
$modproduc->textField('Código', 'codigo', FH_STRING, '', 'placeholder="Codigo del producto"');
$modproduc->textField('Marca', 'marca', FH_STRING, '', 'placeholder="Marca"');
$modproduc->textField('Modelo', 'modelo', FH_STRING, '', 'placeholder="Modelo"');
$modproduc->textArea('Descripción', 'descripcion', FH_STRING, '', 'placeholder="Descripción breve del producto"');
$modproduc->textField('Precio', 'precio');
$modproduc->dateTextField('Fecha de ingreso', 'fecha', FH_STRING);
$modproduc->submitButton('Modificar producto', 'btn_continuar', 'btn-primary btn-sm mt-3');

$modproduc = $modproduc->flush(true);