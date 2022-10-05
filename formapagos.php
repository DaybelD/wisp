<?php
require_once 'requires.php';
$modulo = 'Finanzas_Formas de pago';
$c = $pdo->sql2array('SELECT id, nombre, moneda_id, plataforma FROM formas_pagos');

$smarty->assign('c', $c);
$smarty->display('formapagos.tpl');
