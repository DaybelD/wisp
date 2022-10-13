<?php
require_once 'requires.php';
require_once 'forms/compras_agregar.php';

$smarty->assign('agregarcom', $agregarcom);
$smarty->display('compras_agregar.tpl');