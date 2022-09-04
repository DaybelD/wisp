<?php
require_once 'requires.php';

$c = $pdo->sql2array('SELECT id, nombre, moneda_id, plataforma FROM formas_pagos LIMIT 25');

$smarty->assign('c', $c);
$smarty->display('formapagos.tpl');
