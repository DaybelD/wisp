<?php

$modificaruser = new FormHandler('frm_modificar', 'usuarios_modificar_proc.php');

$modificaruser->textField('Usuario', 'id', FH_STRING, '', 'placeholder="Usuario" readonly');

$modificaruser->textField('Nombre', 'nombre', FH_STRING, '', 'placeholder="Nombre"');

$modificaruser->selectField('Nivel', 'nivel', $pdo->enum('usuarios', 'nivel'), null, 'form-select-sm', null);
$modificaruser->selectField('Estatus', 'estatus', $pdo->enum('usuarios', 'estatus'), null, 'form-select-sm', null);

$modificaruser->submitButton('Modificar', 'btn_continuar', 'btn-primary btn-sm mt-3');

$datos = $pdo->sql2row('SELECT nombre, nivel, estatus from usuarios where id = ?', [$id], ['STR']);
$modificaruser->setValue('id', $id);
$modificaruser->setValue('nombre', $datos['nombre']);
$modificaruser->setValue('nivel', $datos['nivel']);
$modificaruser->setValue('estatus', $datos['estatus']);

$modificaruser = $modificaruser->flush(true);