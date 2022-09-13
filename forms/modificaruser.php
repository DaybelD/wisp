<?php

$modificaruser = new FormHandler('', '');

$modificaruser->textField('Usuario', 'id', FH_STRING, '', 'placeholder="Usuario" disabled');

$modificaruser->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$modificaruser->selectField('Nivel', 'nivel', $pdo->enum('usuarios', 'nivel'), null, 'form-select-sm', null);

$modificaruser->submitButton('Agregar', 'btn_continuar', 'btn-primary btn-sm');

$datos = $pdo->sql2row('SELECT nombre, nivel from usuarios where id = ?', [$id], ['STR']);
$modificaruser->setValue('id', $id);
$modificaruser->setValue('nombre', $datos['nombre']);
$modificaruser->setValue('nivel', $datos['nivel']);

$modificaruser = $modificaruser->flush(true);