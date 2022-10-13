<?php
require_once 'requires.php';
require_once 'forms/gastos_agregar.php';

$smarty->assign('agregargas', $agregargas);
$smarty->display('gastos_agregar.tpl');