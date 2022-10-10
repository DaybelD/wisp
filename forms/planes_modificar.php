<?php

$modplan = new FormHandler('', '');

$modplan-> textField('Nombre', 'nombre');

$modplan-> textField('Precio', 'precio');

$modplan-> textField('Subida', 'subida');

$modplan-> textField('Bajada', 'bajada');

$modplan-> textArea('Descripción', 'descripcion');

$modplan-> textField('Recargo por mora', 'recargo');

$modplan->submitButton('Agregar plan', 'btn_continuar', 'btn-primary btn-sm');

$modplan = $modplan->flush(true);