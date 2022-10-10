<?php
require_once 'requires.php';
require_once 'forms/instalaciones_modificar.php';

$smarty->assign('modinstal', $modinstal);
$smarty->display('instalaciones_modificar.tpl');