<?php

$agregarplan = new FormHandler('', '');

$agregarplan-> textField('Nombre', 'nombre');

$agregarplan-> textField('Precio', 'precio');

$agregarplan-> textField('Subida', 'subida');

$agregarplan-> textField('Bajada', 'bajada');

$agregarplan-> textArea('Descripción', 'descripcion');

$agregarplan-> textField('Recargo por mora', 'recargo');

$agregarplan->submitButton('Agregar plan', 'btn_continuar', 'btn-primary btn-sm mt-3');

$agregarplan = $agregarplan->flush(true);