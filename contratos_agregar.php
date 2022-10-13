<?php
require_once 'requires.php';
require_once 'forms/contratos_agregar.php';

$smarty->assign('agregarcontr', $agregarcontr);
$smarty->display('contratos_agregar.tpl');