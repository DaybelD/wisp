<?php

$agregarfrpago = new FormHandler('', '');

$agregarfrpago->textField('Nombre', 'nombre', FH_STRING, '');

$agregarfrpago->textField('Moneda', 'moneda', FH_STRING, '');

$agregarfrpago->textField('Plataforma', 'plataforma', FH_STRING, '', '');

$agregarfrpago->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$agregarfrpago = $agregarfrpago->flush(true);