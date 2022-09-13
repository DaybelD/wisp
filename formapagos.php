<?php
require_once 'requires.php';

$c = $pdo->sql2array('SELECT id, nombre, moneda_id, plataforma FROM formas_pagos');

$smarty->assign('c', $c);
$smarty->display('formapagos.tpl');
