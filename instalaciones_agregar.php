<?php
require_once 'requires.php';
require_once 'forms/agregarinstal.php';

$smarty->assign('agregarinstal', $agregarinstal);
$smarty->display('instalaciones_agregar.tpl');