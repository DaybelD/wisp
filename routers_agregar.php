<?php
require_once 'requires.php';
require_once 'forms/routers_agregar.php';

$smarty->assign('agregarrout', $agregarrout);
$smarty->display('routers_agregar.tpl');