<?php
require_once 'requires.php';
require_once 'forms/clientes_agregar.php';

$smarty->assign('agregarcli', $agregarcli);
$smarty->display('clientes_agregar.tpl');