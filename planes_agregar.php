<?php
require_once 'requires.php';
require_once 'forms/planes_agregar.php';

$smarty->assign('agregarplan', $agregarplan);
$smarty->display('planes_agregar.tpl');