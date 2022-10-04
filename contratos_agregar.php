<?php
require_once 'requires.php';
require_once 'forms/agregarcontr.php';

$smarty->assign('agregarcontr', $agregarcontr);
$smarty->display('contratos_agregar.tpl');